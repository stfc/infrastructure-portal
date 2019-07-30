<?php

namespace Drupal\rii_invitation\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

use Drupal\Core\Queue\QueueFactory;
use Drupal\Core\Queue\QueueInterface;
use Drupal\Core\Queue\QueueWorkerInterface;
use Drupal\Core\Queue\QueueWorkerManagerInterface;
use Drupal\Core\Queue\SuspendQueueException;
use Symfony\Component\DependencyInjection\ContainerInterface;

class InviteForm extends FormBase {

  public function getFormId() {
    return 'invite_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit_queue_mail'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Queue mail'),
    );
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    /*$user = \Drupal\user\Entity\User::create();
    $user->enforceIsNew();
    $password = user_password();
    $user->setPassword($password);
    $user->setEmail('lepefo@mail-share.net');
    $user->setUsername('test_account');
    $user->activate();
    $user->save();
 
    $test_group = \Drupal\group\Entity\Group::create(['type' => 'infrastructure_owners']);
    $test_group->set('label', "invite_test_group");
    $test_group->setOwner($user);
    $test_group->save();
    $group_id = $test_group->id();

    $nid = 4627;
    $node_storage = \Drupal::entityTypeManager()->getStorage('node');
    $node = $node_storage->load($nid);

    $user = user_load_by_mail('lepefo@mail-share.net');
    $node->setOwnerId($user->id());
    $group_storage = \Drupal::entityTypeManager()->getStorage('group'); 
    $group = $group_storage->load($group_id);
    $group->addContent($node, 'group_node:rii');
    $group->save();
    if ($node->get('field_q_50')->value == "I wish to opt out: please do not publish further data on this RII in the publicly available tool without contacting me first"
        || $node->get('field_q_50')->value == "I wish to opt out - please do not publish my infrastructure in the online tool") {
      $node->set('moderation_state', 'requires_form_completer_approval');
    }
    $node->save();*/

    $from = NULL;
    $reg_list = NULL;
    $nids = \Drupal::entityQuery('node')->condition('type', 'rii')->execute();
    $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);
    foreach ($nodes as $node) {
      $username = substr($node->get('field_q_1')->value, 0, 60); 
      if ($username == "Charlotte Roueché") { $username = "Charlotte Roueche"; }
      $username = strtolower($username);
      $username = preg_replace('/[^a-z0-9]+/i', '_', $username);
      if (!isset($reg_list[$username])) {
        $user = \Drupal\user\Entity\User::create();
        $user->enforceIsNew();
        $password = user_password();
        $user->setPassword($password);
        $user->setEmail(strtolower($node->get('field_q_2')->value));
        $user->setUsername($username);
        $user->activate();
        $user->save();
     
        $group = \Drupal\group\Entity\Group::create(['type' => 'infrastructure_owners']);
        $group->set('label', $node->get('field_q_1')->value . "'s group");
        $group->setOwner($user);
        $group->save();
        
        $reg_list[$username] = $group->id();
        
        $to = strtolower($node->get('field_q_2')->value);
        $subject = "Your entry in the infrastructure roadmap portal";
        $body = 
        "<p>Dear " . $node->get('field_q_1')->value ."</p>
    
        <p>We are writing regarding your input into the Research and Innovation Infrastructure Roadmap and its discovery portal. As you may remember the portal will function to allow others to find out about the infrastructure available for the UK and we informed you that we’d use the questionnaire input, with your permission, to populate this. We are now ready to start testing the portal and validating the information that you provided about your infrastructures. </p> 

        <p>Before the portal is public we would like to invite you to check your details are still up to date and amend them if necessary. We will only display the infrastructure’s name, description, keywords, location, links to sectors and the economy and the infrastructure’s contact details to the public. No other information that you provided in the questionnaire will be displayed (e.g. staff numbers, funding, costs). As you provided the information about your infrastructure for the purpose of the questionnaire, you may wish to amend fields such as the description and add keywords to make it more relevant as a discovery platform for industry, academia and policy makers.</p> 

        <p>We have provided you with a personal account on the portal, linked to your infrastructure(s), to allow you to check and edit your information. You can log in at 
        https://infraportal.stfc.ac.uk/user/login using the following details:</p>

        <p>Username: " . $user->getUsername() . "</p>
        <p>Password: " . $password ." (<b>Please change this after logging in</b>)</p>

        <p><ul><li>Once you've logged in and changed your password, click the 'Manage infrastructure groups' link in the top right of the page. Your group will include any infrastructures that you
        completed a questionnaire on behalf of. You can see and edit your infrastructures by going to the 'Nodes' tab on your group page.</li> 

        <li>If you opted into having an infrastructure's basic data published without further contact, it will already be in the 'Approved and published' state.</li> 

        <li>If you wanted to be asked for approval first, it will be in the 'Requires form completer approval' state and will not be publically
        visible. Click the infrastructure's name to see what its entry currently looks like, then click on the edit tab to amend details. At the bottom of the edit form, select 'Approved and published'
        from the drop down and click save to publish the web page.</li></ul></p>    

        <p>You can allow colleagues to help edit and check your infrastructure's details by having them register a personal account on the website (by clicking the 'Log in' link and then 'Create a new acc        ount') and adding them to your group. Once they have registered, click the 'Add member' button on the 'Members' tab of your group page and type their username into the text box that follows. </p>

        <p>At this point in time we are focussing our efforts on validating our current dataset of over 800 infrastructures. Later in the summer we will open the site to allow additional infrastructures to be added to the portal.</p>

        <p>Please can you check and update your details by <b>30th August 2019</b>? If for any reason you no longer wish your infrastructure to be displayed in the portal please reply to this message to let us know and we will remove your entry and personal account as requested. We hope to publically launch the portal in early autumn.</p>

        <p>If you have any questions, please do not hesitate to get in touch with us at infraportal@ukri.org.</p>

        <p>Warm Regards,</p>

        <p>The Roadmap Team</p>";
        simple_mail_queue($from, $to, $subject, $body);
      }
    $user = user_load_by_name($username);
    $node->setOwnerId($user->id());
    $group_storage = \Drupal::entityTypeManager()->getStorage('group'); 
    $group = $group_storage->load($reg_list[$username]);
    $group->addContent($node, 'group_node:rii');
    $group->save();
    if ($node->get('field_q_50')->value == "I wish to opt out: please do not publish further data on this RII in the publicly available tool without contacting me first"
        || $node->get('field_q_50')->value == "I wish to opt out - please do not publish my infrastructure in the online tool") {
      $node->set('moderation_state', 'requires_form_completer_approval'); }
    else {
      $node->set('moderation_state', 'published');
    }
    $node->save();
    }
    
  }

}







