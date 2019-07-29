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
        $subject = "Your entries in the infrastructure roadmap portal";
        $body = 
        "<p>Dear " . $node->get('field_q_1')->value ."</p>
    
        <p>We are writing regarding your input into the Research and Innovation Infrastructure Roadmap for which you kindly completed a questionnaire last year. One of the products of the Roadmap
        programme is a discovery web portal to allow others to find out about the infrastructure available for the UK and we informed you that we’d use the questionnaire input, with your permission, 
        to populate this. We are pleased to announce that we are now ready to start testing the portal and validating the information that you have provided about your infrastructures.</p> 

        <p>Before this portal launches after the summer, we would like you to <b>check your details are still up to date and amend them if necessary</b>. We will only display the infrastructure’s name, 
        description, location, links to sectors and the economy and infrastructure contact details in the portal. These will be publicly visible. No other details that you previously provided 
        in the questionnaire will be shown (e.g. staff numbers, funding, costs). When you provided the information about your infrastructure last year it was for the purpose of the questionnaire
         – you may now wish to tailor fields such as the description and add keywords to make it more relevant as a discovery platform for our key audiences of researchers from industry and academia.</p> 

        <p>We have provided you with a personal account on the portal, linked to your infrastructure(s), to allow you to check and edit your information. You can log in at 
        https://infraportal.stfc.ac.uk/user/login using the following details:</p>

        <p>Username: " . $user->getUsername() . "</p>
        <p>Password: " . $password ." (<b>Please change this after logging in</b>)</p>

        <p>Once you've logged in and changed your password, click the 'Manage infrastructure groups' link in the top right of the page. A group should have already been created for you with any
        infrastructures you registered already added to it. You can see your infrastructures by going to the 'Nodes' tab on your group page. If you opted into having an infrastructure's basic data 
        published without further contact, it will already be in the 'Approved and published' state. Otherwise, it will be in the 'Requires form completer approval' state and will not be publically
        visible. Click the infrastructure's name to see what its web page currently looks like, then click on the edit tab to amend details. At the bottom of the edit form, select 'Approved and published'
        from the drop down and click save to publish the web page.</p>    

        <p>You can allow colleagues to help edit and check your infrastructure's details by having them register an account on the website and adding them to your group. Click the 
        'Add member' button on the 'Members' tab of your group page and type their username into the text box that follows. </p>

        <p>We will be open later in the summer to allow new infrastructures that did not complete the questionnaire to add their infrastructures to the portal before launching. At this point in time we 
        are focussing our efforts on validating our current dataset of over 800 infrastructures.</p>

        <p>Please can you check and update your details by <b>August 19th</b>? If for any reason you do not wish your infrastructure to be displayed in the portal please reply to this message to
        let us know and we will remove your entry and personal account as requested.</p>

        <p>We hope to publically launch the portal alongside the First Edition of the Roadmap in early autumn.</p>

        <p>If you have any questions, please do not hesitate to get in touch.</p>

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
    $node->save();
    }
    
  }

}







