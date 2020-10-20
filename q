-- Logs begin at Wed 2020-04-08 20:29:35 BST, end at Thu 2020-04-09 09:43:55 BST. --
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mExecuting command: /usr/bin/systemctl is-enabled -- cups.service with options: stderr=SCALAR(0x34e4238) stdout=SCALAR(0x3511250)[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mUnit cups.service UnitFileState empty or bad is-enabled failed[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mget_ufstate: unit cups.service found no wantedby units in state enabled. Setting derived state to disabled.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mNo ufstate could be determined. Using derived state disabled.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit cups.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit edac.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit fail2ban.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit httpd24-httpd.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit icinga2.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit irqbalance.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mExecuting command: /usr/bin/systemctl is-enabled -- kudzu.service with options: stderr=SCALAR(0x34e4238) stdout=SCALAR(0x3511250)[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mUnit kudzu.service UnitFileState empty or bad is-enabled failed[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mget_ufstate: unit kudzu.service found no wantedby units in state enabled. Setting derived state to disabled.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mNo ufstate could be determined. Using derived state disabled.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit kudzu.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mExecuting command: /usr/bin/systemctl is-enabled -- ncm-cdispd.service with options: stderr=SCALAR(0x34e4238) stdout=SCALAR(0x3511250)[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mUnit ncm-cdispd.service UnitFileState empty or bad is-enabled enabled[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit ncm-cdispd.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mExecuting command: /usr/bin/systemctl is-enabled -- network.service with options: stderr=SCALAR(0x34e4238) stdout=SCALAR(0x3511250)[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mUnit network.service UnitFileState empty or bad is-enabled enabled[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit network.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit nrpe.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit ntpd.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit psacct.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit rngd.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mConfigured unit rpcidmapd.service is an alias of non-configured unit nfs-idmapd.service.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mget_ufstate: unit nfs-idmapd.service found no wantedby units in state enabled. Setting derived state to disabled.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: is_ufstate: unit nfs-idmapd.service with UnitFileState 'static' is a static unit. Not going to force the state to enabled and assume this is ok.
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit nfs-idmapd.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit rsyslog.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit sshd.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit vmtoolsd.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: unit ypbind.service scheduled for activation[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mExecuting command: /usr/bin/systemctl is-enabled -- yum.service with options: stderr=SCALAR(0x34e4238) stdout=SCALAR(0x3511250)[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mUnit yum.service UnitFileState empty or bad is-enabled failed[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mget_ufstate: unit yum.service found no wantedby units in state enabled. Setting derived state to disabled.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mNo ufstate could be determined. Using derived state disabled.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mprocess: nothing to do for unit yum.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mUnconfigured current units are ignored[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mExecuting command: /usr/bin/systemctl is-active -- multi-user.target with options: stderr=SCALAR(0x34e4238) stdout=SCALAR(0x3511250)[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mGetting output of command: /usr/bin/systemctl start -- ypbind.service[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:14824:4614277 (system bus name :1.341 [/usr/bin/pkttyagent --notify-fd 5 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsi.service, ignoring: Unit not found.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsid.socket, ignoring: Unit not found.[0m
Apr 09 09:18:37 infraportal.stfc.ac.uk systemd[1]: Starting NIS/YP (Network Information Service) Clients to NIS Domain Binder...
-- Subject: Unit ypbind.service has begun start-up
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit ypbind.service has begun starting up.
Apr 09 09:18:37 infraportal.stfc.ac.uk setsebool[14835]: setsebool:  SELinux is disabled.
Apr 09 09:18:37 infraportal.stfc.ac.uk ypbind[14844]: [1;39mBinding NIS service[0m
Apr 09 09:19:01 infraportal.stfc.ac.uk crond[9990]: (root) BAD FILE MODE (/etc/cron.d/0hourly)
Apr 09 09:19:01 infraportal.stfc.ac.uk crond[9990]: (*system*) RELOAD (/etc/cron.d/magdb-discover.ncm-cron.cron)
Apr 09 09:19:01 infraportal.stfc.ac.uk crond[9990]: (*system*) RELOAD (/etc/cron.d/pakiti2-daily.ncm-cron.cron)
Apr 09 09:19:28 infraportal.stfc.ac.uk ypbind[14863]: [1;39mBinding took 51 seconds[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ypbind[14865]: [1;39mNIS server for domain csf is not responding.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ypbind[14866]: [1;39mKilling ypbind with PID 14839.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ypbind[14867]: [1;39mTry increase NISTIMEOUT in /etc/sysconfig/ypbind[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: [1;39mypbind.service: control process exited, code=exited status=1[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: [1;31mFailed to start NIS/YP (Network Information Service) Clients to NIS Domain Binder.[0m
-- Subject: Unit ypbind.service has failed
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit ypbind.service has failed.
-- 
-- The result is failed.
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: [1;39mUnit ypbind.service entered failed state.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: [1;39mypbind.service failed.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk rsyslogd[1781]: action 'action 8' resumed (module 'builtin:omfwd') [v8.24.0-38.el7 try http://www.rsyslog.com/e/2359 ]
Apr 09 09:19:28 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:14824:4614277 (system bus name :1.341, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk rsyslogd[1781]: action 'action 9' resumed (module 'builtin:omfwd') [v8.24.0-38.el7 try http://www.rsyslog.com/e/2359 ]
Apr 09 09:19:28 infraportal.stfc.ac.uk rsyslogd[1781]: action 'action 8' resumed (module 'builtin:omfwd') [v8.24.0-38.el7 try http://www.rsyslog.com/e/2359 ]
Apr 09 09:19:28 infraportal.stfc.ac.uk rsyslogd[1781]: action 'action 9' resumed (module 'builtin:omfwd') [v8.24.0-38.el7 try http://www.rsyslog.com/e/2359 ]
Apr 09 09:19:28 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;31msystemctl_command_units /usr/bin/systemctl start -- ypbind.service returned ec 256 and output Job for ypbind.service failed because the control process exited with error code. See "systemctl status ypbind.service" and "journalctl -xe" for details.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-chkconfig[14244]: configure on component chkconfig executed, 1 errors, 0 warnings
Apr 09 09:19:28 infraportal.stfc.ac.uk component-chkconfig[14244]: [1;39mNo events to report[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mset_state for component chkconfig /var/run/quattor-components/chkconfig (message: 1)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mOpening file /var/run/quattor-components/chkconfig[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mChanges to /var/run/quattor-components/chkconfig:[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mFile /var/run/quattor-components/chkconfig was modified[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mstate for component chkconfig /var/run/quattor-components/chkconfig changed.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: running component: cdp
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mcdp is not a requested component[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mset_state for component cdp /var/run/quattor-components/cdp (no message)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mOpening file /var/run/quattor-components/cdp[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo contents from missing /var/run/quattor-components/cdp[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo original content for /var/run/quattor-components/cdp; new content is the diff[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mChanges to /var/run/quattor-components/cdp:[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mFile /var/run/quattor-components/cdp was modified[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mstate for component cdp /var/run/quattor-components/cdp changed.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-cdp[14244]: [1;39mOpening file /etc/cdp-listend.conf[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-cdp[14244]: [1;39mFile /etc/cdp-listend.conf was not modified[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-cdp[14244]: configure on component cdp executed, 0 errors, 0 warnings
Apr 09 09:19:28 infraportal.stfc.ac.uk component-cdp[14244]: [1;39mNo events to report[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mmark state of component cdp as success, removing statefile /var/run/quattor-components/cdp[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: running component: ccm
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mccm is not a requested component[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mset_state for component ccm /var/run/quattor-components/ccm (no message)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mOpening file /var/run/quattor-components/ccm[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo contents from missing /var/run/quattor-components/ccm[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo original content for /var/run/quattor-components/ccm; new content is the diff[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mChanges to /var/run/quattor-components/ccm:[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mFile /var/run/quattor-components/ccm was modified[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mstate for component ccm /var/run/quattor-components/ccm changed.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-ccm[14244]: [1;39mOpening file /etc/ccm.conf[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-ccm[14244]: [1;39mCreating tmp configfile /tmp/ncm-ccm-kQoIg//etc/ccm.conf for testing.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-ccm[14244]: [1;39mExecuting command: /usr/sbin/ccm-fetch --cfgfile /tmp/ncm-ccm-kQoIg//etc/ccm.conf with options: stderr=SCALAR(0x435b150)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ccm-fetch[14872]: Fetched profile unchanged, latest CID 174 name infraportal_production-sandbox-nxi59545
Apr 09 09:19:28 infraportal.stfc.ac.uk component-ccm[14244]: [1;39mCleaning up tmpdir /tmp/ncm-ccm-kQoIg[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-ccm[14244]: [1;39mFile /etc/ccm.conf was not modified[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-ccm[14244]: configure on component ccm executed, 0 errors, 0 warnings
Apr 09 09:19:28 infraportal.stfc.ac.uk component-ccm[14244]: [1;39mNo events to report[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mmark state of component ccm as success, removing statefile /var/run/quattor-components/ccm[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: running component: autofs
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mautofs is not a requested component[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mset_state for component autofs /var/run/quattor-components/autofs (no message)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mOpening file /var/run/quattor-components/autofs[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo contents from missing /var/run/quattor-components/autofs[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo original content for /var/run/quattor-components/autofs; new content is the diff[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mChanges to /var/run/quattor-components/autofs:[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mFile /var/run/quattor-components/autofs was modified[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mstate for component autofs /var/run/quattor-components/autofs changed.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-autofs[14244]: Checking map home-tier1...
Apr 09 09:19:28 infraportal.stfc.ac.uk component-autofs[14244]: Checking map misc...
Apr 09 09:19:28 infraportal.stfc.ac.uk component-autofs[14244]: Checking /etc/auto.master...
Apr 09 09:19:28 infraportal.stfc.ac.uk component-autofs[14244]: [1;39mNo changes detected in any of the config files; not reloading autofs.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-autofs[14244]: configure on component autofs executed, 0 errors, 0 warnings
Apr 09 09:19:28 infraportal.stfc.ac.uk component-autofs[14244]: [1;39mNo events to report[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mmark state of component autofs as success, removing statefile /var/run/quattor-components/autofs[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: running component: authconfig
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mauthconfig is not a requested component[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mset_state for component authconfig /var/run/quattor-components/authconfig (no message)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mOpening file /var/run/quattor-components/authconfig[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo contents from missing /var/run/quattor-components/authconfig[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo original content for /var/run/quattor-components/authconfig; new content is the diff[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mChanges to /var/run/quattor-components/authconfig:[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mFile /var/run/quattor-components/authconfig was modified[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk ncd[14244]: [1;39mstate for component authconfig /var/run/quattor-components/authconfig changed.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-authconfig[14244]: [1;39mEnabling NIS authentication[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-authconfig[14244]: [1;39mFiles method is always enabled[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk component-authconfig[14244]: [1;39mExecuting command: authconfig --kickstart --enableshadow --enablecache --passalgo=sha512 --enablenis --nisdomain csf --nisserver nis0.gridpp.rl.ac.uk,nis1.gridpp.rl.ac.uk,nis2.gridpp.rl.ac.uk with options: stderr=SCALAR(0x43f57d8) stdout=SCALAR(0x43f6168) timeout=60[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:14889:4619440 (system bus name :1.343 [/usr/bin/pkttyagent --notify-fd 11 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: Reloading.
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: [1;39mBinding to IPv6 address not available since kernel does not support IPv6.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: [1;39mBinding to IPv6 address not available since kernel does not support IPv6.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:14889:4619440 (system bus name :1.343, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:14909:4619445 (system bus name :1.344 [/usr/bin/pkttyagent --notify-fd 11 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsi.service, ignoring: Unit not found.[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:14909:4619445 (system bus name :1.344, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:14916:4619447 (system bus name :1.345 [/usr/bin/pkttyagent --notify-fd 11 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:19:28 infraportal.stfc.ac.uk systemd[1]: Reloading.
Apr 09 09:19:29 infraportal.stfc.ac.uk systemd[1]: [1;39mBinding to IPv6 address not available since kernel does not support IPv6.[0m
Apr 09 09:19:29 infraportal.stfc.ac.uk systemd[1]: [1;39mBinding to IPv6 address not available since kernel does not support IPv6.[0m
Apr 09 09:19:29 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:14916:4619447 (system bus name :1.345, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:19:29 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:14937:4619452 (system bus name :1.346 [/usr/bin/pkttyagent --notify-fd 11 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:19:29 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:14937:4619452 (system bus name :1.346, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:19:29 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:14943:4619454 (system bus name :1.347 [/usr/bin/pkttyagent --notify-fd 11 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:19:29 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsi.service, ignoring: Unit not found.[0m
Apr 09 09:19:29 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsid.socket, ignoring: Unit not found.[0m
Apr 09 09:19:29 infraportal.stfc.ac.uk systemd[1]: Starting NIS/YP (Network Information Service) Clients to NIS Domain Binder...
-- Subject: Unit ypbind.service has begun start-up
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit ypbind.service has begun starting up.
Apr 09 09:19:29 infraportal.stfc.ac.uk setsebool[14954]: setsebool:  SELinux is disabled.
Apr 09 09:19:29 infraportal.stfc.ac.uk ypbind[14962]: [1;39mBinding NIS service[0m
Apr 09 09:20:01 infraportal.stfc.ac.uk systemd[1]: Started Session 145 of user root.
-- Subject: Unit session-145.scope has finished start-up
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit session-145.scope has finished starting up.
-- 
-- The start-up result is done.
Apr 09 09:20:01 infraportal.stfc.ac.uk CROND[14973]: (root) CMD (/usr/lib64/sa/sa1 1 1)
Apr 09 09:20:20 infraportal.stfc.ac.uk ypbind[14981]: [1;39mBinding took 51 seconds[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ypbind[14983]: [1;39mNIS server for domain csf is not responding.[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ypbind[14984]: [1;39mKilling ypbind with PID 14957.[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ypbind[14985]: [1;39mTry increase NISTIMEOUT in /etc/sysconfig/ypbind[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk systemd[1]: [1;39mypbind.service: control process exited, code=exited status=1[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk systemd[1]: [1;31mFailed to start NIS/YP (Network Information Service) Clients to NIS Domain Binder.[0m
-- Subject: Unit ypbind.service has failed
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit ypbind.service has failed.
-- 
-- The result is failed.
Apr 09 09:20:20 infraportal.stfc.ac.uk systemd[1]: [1;39mUnit ypbind.service entered failed state.[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk systemd[1]: [1;39mypbind.service failed.[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:14943:4619454 (system bus name :1.347, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-authconfig[14244]: authconfig command ERROR produced:
Apr 09 09:20:20 infraportal.stfc.ac.uk component-authconfig[14244]: configure on component authconfig executed, 0 errors, 0 warnings
Apr 09 09:20:20 infraportal.stfc.ac.uk component-authconfig[14244]: [1;39mNo events to report[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mmark state of component authconfig as success, removing statefile /var/run/quattor-components/authconfig[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: running component: altlogrotate
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39maltlogrotate is not a requested component[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mset_state for component altlogrotate /var/run/quattor-components/altlogrotate (no message)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mOpening file /var/run/quattor-components/altlogrotate[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo contents from missing /var/run/quattor-components/altlogrotate[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo original content for /var/run/quattor-components/altlogrotate; new content is the diff[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mChanges to /var/run/quattor-components/altlogrotate:[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mFile /var/run/quattor-components/altlogrotate was modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mstate for component altlogrotate /var/run/quattor-components/altlogrotate changed.[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-altlogrotate[14244]: [1;39mentry name global found, processing it as first one[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-altlogrotate[14244]: [1;39mentry name wtmp with global=true found[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-altlogrotate[14244]: [1;39mOpening file /etc/logrotate.conf[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-altlogrotate[14244]: [1;39mAdding entry global to global /etc/logrotate.conf[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-altlogrotate[14244]: [1;39mAdding entry wtmp to global /etc/logrotate.conf[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-altlogrotate[14244]: [1;39mFile /etc/logrotate.conf was not modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-altlogrotate[14244]: configure on component altlogrotate executed, 0 errors, 0 warnings
Apr 09 09:20:20 infraportal.stfc.ac.uk component-altlogrotate[14244]: [1;39mNo events to report[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mmark state of component altlogrotate as success, removing statefile /var/run/quattor-components/altlogrotate[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: running component: accounts
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39maccounts is not a requested component[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mset_state for component accounts /var/run/quattor-components/accounts (no message)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mOpening file /var/run/quattor-components/accounts[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo contents from missing /var/run/quattor-components/accounts[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo original content for /var/run/quattor-components/accounts; new content is the diff[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mChanges to /var/run/quattor-components/accounts:[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mFile /var/run/quattor-components/accounts was modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mstate for component accounts /var/run/quattor-components/accounts changed.[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mOpening file /etc/group[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mWill not save file /etc/group (cancelled)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mBuilding group map[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mNot saving file /etc/group[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mOpening file /etc/passwd[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mWill not save file /etc/passwd (cancelled)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mBuilding an account map[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mNot saving file /etc/passwd[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mOpening file /etc/shadow[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mWill not save file /etc/shadow (cancelled)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mAdding passwords to the accounts map[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mNot saving file /etc/shadow[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mOpening file /etc/login.defs[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mRetrieving /etc/login.defs parameters[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mFile /etc/login.defs was not modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: System has 52 accounts in 81 groups
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mPreparing map of desired accounts in the system[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mAdjusting groups[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mGroup nagios: no modification made to membership[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mAdjusting accounts[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mDeleting account nagios from group nagios[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mDeleting account root from group root[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mDeleting account root from group adm[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mDeleting account root from group bin[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mDeleting account root from group sys[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mDeleting account root from group disk[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mDeleting account root from group daemon[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mChecking for system consistency[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mChecking for groups consistency[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mChecking for account consistency[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mPreparing group file[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: Committing 81 groups
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mOpening file /etc/group[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mFile /etc/group was not modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mExecuting command: /usr/bin/pgrep -f /usr/sbin/nscd with options: stderr=SCALAR(0x45df7f0) stdout=SCALAR(0x45df7c0)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mExecuting command: /usr/sbin/nscd -i group with options: stderr=SCALAR(0x45df7f0) stdout=SCALAR(0x45df7c0)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk nscd[1410]: [1;39m1410 monitoring file `/etc/group` (3)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk nscd[1410]: [1;39m1410 monitoring directory `/etc` (2)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: Invalidated nscd cache
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mCommitting passwd and shadow files[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: Committing 52 accounts
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mOpening file /etc/passwd[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mFile /etc/passwd was not modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mOpening file /etc/shadow[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mFile /etc/shadow was not modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mExecuting command: /usr/bin/pgrep -f /usr/sbin/nscd with options: stderr=SCALAR(0x45df7f0) stdout=SCALAR(0x45df7c0)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mExecuting command: /usr/sbin/nscd -i passwd with options: stderr=SCALAR(0x45df7f0) stdout=SCALAR(0x45df7c0)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk nscd[1410]: [1;39m1410 monitoring file `/etc/passwd` (1)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk nscd[1410]: [1;39m1410 monitoring directory `/etc` (2)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: Invalidated nscd cache
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: configure on component accounts executed, 0 errors, 0 warnings
Apr 09 09:20:20 infraportal.stfc.ac.uk component-accounts[14244]: [1;39mNo events to report[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mmark state of component accounts as success, removing statefile /var/run/quattor-components/accounts[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: running component: sudo
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39msudo is not a requested component[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mset_state for component sudo /var/run/quattor-components/sudo (no message)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mOpening file /var/run/quattor-components/sudo[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo contents from missing /var/run/quattor-components/sudo[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mNo original content for /var/run/quattor-components/sudo; new content is the diff[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mChanges to /var/run/quattor-components/sudo:[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mFile /var/run/quattor-components/sudo was modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mstate for component sudo /var/run/quattor-components/sudo changed.[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-sudo[14244]: [1;39mOpening file /etc/sudoers[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-sudo[14244]: [1;39mExecuting command: /usr/sbin/visudo -c -f /proc/self/fd/0 with options: stderr=SCALAR(0x45f35e0) stdin=# File created by ncm-sudo v. 18.6.0[0m
                                                              [1;39m# Read man(5) sudoers for understanding the structure[0m
                                                              [1;39m# of this file[0m
                                                              [1;39m[0m
                                                              [1;39m# User alias specification[0m
                                                              [1;39mUser_Alias      NAGIOSUSER        = nagios,icinga[0m
                                                              [1;39m[0m
                                                              [1;39m# Runas alias specification[0m
                                                              [1;39m[0m
                                                              [1;39m# Command alias specification[0m
                                                              [1;39m[0m
                                                              [1;39m# Host alias specification[0m
                                                              [1;39m[0m
                                                              [1;39m# Files to be included[0m
                                                              [1;39m[0m
                                                              [1;39m# Directories to be included[0m
                                                              [1;39m#includedir /etc/sudoers.d/[0m
                                                              [1;39m[0m
                                                              [1;39m# Defaults specification[0m
                                                              [1;39mDefaults        always_set_home[0m
                                                              [1;39mDefaults        env_reset[0m
                                                              [1;39mDefaults        env_keep="COLORS DISPLAY HOSTNAME HISTSIZE INPUTRC KDEDIR LS_COLORS MAIL PS1 PS2 QTDIR USERNAME LANG LC_ADDRESS LC_CTYPE LC_COLLATE LC_IDENTIFICATION LC_MEASUREMENT LC_MESSAGES LC_MONETARY LC_NAME LC_NUMERIC LC_PAPER LC_TELEPHONE LC_TIME LC_ALL LANGUAGE LINGUAS _XKB_CHARSET XAUTHORITY"[0m
                                                              [1;39m[0m
                                                              [1;39m# User privilege specification[0m
                                                              [1;39mroot        ALL= (ALL)        ALL[0m
                                                              [1;39m%wheel        ALL= (ALL)        ALL[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_ro-fs.sh[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib64/nagios/plugins/check_log -F /var/log/messages *[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_xrd_log.sh[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_myproxy.pl[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /etc/init.d/argus-*[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/argus/check_argus_status.sh[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_arc_jobs.pl[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_arc_apel.pl[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_site_bdii.pl[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_phedex_proxy.pl[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_fsprobe.pl[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /opt/MegaRAID/MegaCli/MegaCli64 -AdpAllInfo -aAll -NoLog, /usr/lib/nagios/plugins/tier1/check_megasas.sh [0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_ipmi_psu[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /sbin/multipath -ll[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_proxy_renewal.pl[0m
                                                              [1;39mNAGIOSUSER        ALL= (root)        NOPASSWD:        /usr/lib/nagios/plugins/tier1/check_haproxy_stats.pl[0m
                                                              [1;39m stdout=SCALAR(0x45f6548)[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-sudo[14244]: [1;39mFile /etc/sudoers was not modified[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk component-sudo[14244]: configure on component sudo executed, 0 errors, 0 warnings
Apr 09 09:20:20 infraportal.stfc.ac.uk component-sudo[14244]: [1;39mNo events to report[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;39mmark state of component sudo as success, removing statefile /var/run/quattor-components/sudo[0m
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: Errors while configuring chkconfig (1) metaconfig (2)
Apr 09 09:20:20 infraportal.stfc.ac.uk ncd[14244]: [1;31m3 errors, 0 warnings executing configure[0m
Apr 09 09:29:47 infraportal.stfc.ac.uk sm-msp-queue[15093]: STARTTLS=client, relay=csf-mail.rl.ac.uk, version=TLSv1/SSLv3, verify=FAIL, cipher=ECDHE-RSA-AES256-GCM-SHA384, bits=256/256
Apr 09 09:29:47 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbO013757: to=postmaster, delay=00:59:33, xdelay=00:00:00, mailer=relay, pri=229690, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:29:47 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbP013757: to=postmaster, delay=00:59:33, xdelay=00:00:00, mailer=relay, pri=231037, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:29:47 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbQ013757: to=postmaster, delay=00:59:33, xdelay=00:00:00, mailer=relay, pri=232659, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:29:47 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbR013757: to=postmaster, delay=00:59:33, xdelay=00:00:00, mailer=relay, pri=233445, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:29:47 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbS013757: to=postmaster, delay=00:59:33, xdelay=00:00:00, mailer=relay, pri=233458, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:29:51 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbT013757: to=postmaster, delay=00:59:37, xdelay=00:00:03, mailer=relay, pri=234149, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:29:56 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbU013757: to=postmaster, delay=00:59:42, xdelay=00:00:03, mailer=relay, pri=234928, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:30:01 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbV013757: to=postmaster, delay=00:59:47, xdelay=00:00:03, mailer=relay, pri=234941, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:30:01 infraportal.stfc.ac.uk systemd[1]: Started Session 146 of user root.
-- Subject: Unit session-146.scope has finished start-up
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit session-146.scope has finished starting up.
-- 
-- The start-up result is done.
Apr 09 09:30:01 infraportal.stfc.ac.uk CROND[15096]: (root) CMD (/usr/lib64/sa/sa1 1 1)
Apr 09 09:30:06 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbW013757: to=postmaster, delay=00:59:52, xdelay=00:00:03, mailer=relay, pri=236257, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:30:11 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbX013757: to=postmaster, delay=00:59:57, xdelay=00:00:03, mailer=relay, pri=236412, relay=csf-mail.rl.ac.uk [130.246.180.28], dsn=4.7.1, stat=Deferred: 454 4.7.1 <postmaster@infraportal.stfc.ac.uk>: Relay access denied
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbY013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=236425, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397TlbZ013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=237117, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlba013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=237728, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbb013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=237741, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbc013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=237896, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbd013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=237909, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbe013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=238601, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbf013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=239209, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbg013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=239222, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbh013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=239380, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbi013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=239393, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbj013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=240688, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbk013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=240701, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbl013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=240856, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbm013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=240869, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbn013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=241544, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbo013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=241976, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbp013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=242170, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbq013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=242183, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbr013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=242334, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbs013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=242347, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbt013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=243050, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbu013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=243160, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbv013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=243654, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbw013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=243667, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlbx013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=243821, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc0013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=243834, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc1013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=245138, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc2013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=245151, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc3013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=246619, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc4013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=246632, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc5013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=248098, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc6013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=248111, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0396TlbO013457: to=postmaster, delay=01:59:59, xdelay=00:00:00, mailer=relay, pri=321782, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0396TlbP013457: to=postmaster, delay=01:59:59, xdelay=00:00:00, mailer=relay, pri=321795, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0396TlbQ013457: to=postmaster, delay=01:59:59, xdelay=00:00:00, mailer=relay, pri=323276, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0396TlbR013457: to=postmaster, delay=01:59:59, xdelay=00:00:00, mailer=relay, pri=323289, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0396TlbS013457: to=postmaster, delay=01:59:59, xdelay=00:00:00, mailer=relay, pri=324760, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0396TlbT013457: to=postmaster, delay=01:59:59, xdelay=00:00:00, mailer=relay, pri=324773, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0396TlbU013457: to=postmaster, delay=01:59:59, xdelay=00:00:00, mailer=relay, pri=326244, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc7013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=401037, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0397Tlc8013757: to=postmaster, delay=00:59:59, xdelay=00:00:00, mailer=relay, pri=402815, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0392TlbO012583: to=postmaster, delay=05:59:59, xdelay=00:00:00, mailer=relay, pri=690060, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0390TlbO012144: to=fail2ban@localhost, delay=08:00:15, xdelay=00:00:00, mailer=relay, pri=751474, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038NTlbO011906: to=fail2ban@localhost, delay=09:00:15, xdelay=00:00:00, mailer=relay, pri=841461, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038NTlbQ011906: to=postmaster, delay=08:59:59, xdelay=00:00:00, mailer=relay, pri=968549, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038NTlbP011906: to=postmaster, delay=08:59:59, xdelay=00:00:00, mailer=relay, pri=968549, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038NTlbS011906: to=postmaster, delay=08:59:59, xdelay=00:00:00, mailer=relay, pri=968562, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038NTlbR011906: to=postmaster, delay=08:59:59, xdelay=00:00:00, mailer=relay, pri=968562, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038KTlbO010951: to=postmaster, delay=11:59:59, xdelay=00:00:00, mailer=relay, pri=1110000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038JUcDB009981: to=root@localhost, delay=12:59:35, xdelay=00:00:00, mailer=relay, pri=1200221, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038JPWKo026102: to=postmaster, delay=13:04:14, xdelay=00:00:00, mailer=relay, pri=1290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038JPWKp026102: to=postmaster, delay=13:04:14, xdelay=00:00:00, mailer=relay, pri=1290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038JPWKq026102: to=postmaster, delay=13:04:14, xdelay=00:00:00, mailer=relay, pri=1290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038JPWKn026102: to=postmaster, delay=13:04:14, xdelay=00:00:00, mailer=relay, pri=1290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038JTEJA026305: to=root@localhost, delay=13:00:59, xdelay=00:00:00, mailer=relay, pri=1290208, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038IPWKo025796: to=postmaster, delay=14:04:14, xdelay=00:00:00, mailer=relay, pri=1380000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038IPWKp025796: to=postmaster, delay=14:04:14, xdelay=00:00:00, mailer=relay, pri=1380000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038IPWKn025796: to=postmaster, delay=14:04:14, xdelay=00:00:00, mailer=relay, pri=1380000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKp025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKq025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKr025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKt025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKs025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKo025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKu025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKv025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKw025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKx025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL0025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL1025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL2025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL5025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL6025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL7025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL8025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL9025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLA025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLB025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLC025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL3025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWL4025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWKn025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1470000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLD025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1579636, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLE025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1581275, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLF025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1587539, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLG025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1594573, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLH025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1596195, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLJ025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1596614, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLI025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1596614, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLL025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1596627, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLK025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1596627, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLM025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1597537, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038HPWLN025577: to=postmaster, delay=15:04:14, xdelay=00:00:00, mailer=relay, pri=1599154, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038EPWKn024801: to=postmaster, delay=18:04:14, xdelay=00:00:00, mailer=relay, pri=1740000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038DPWKn024580: to=postmaster, delay=19:04:14, xdelay=00:00:00, mailer=relay, pri=1830000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKq024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKo024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKp024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKr024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKs024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKt024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKu024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKv024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKn024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=1920000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038CPWKw024362: to=postmaster, delay=20:04:14, xdelay=00:00:00, mailer=relay, pri=2035623, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038C23mv023946: to=root, ctladdr=root (0/0), delay=20:28:10, xdelay=00:00:00, mailer=relay, pri=2123182, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKn023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2213446, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKo023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2214931, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKp023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2215745, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKq023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2216402, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKr023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2216415, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKs023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2217886, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKt023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2217899, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKu023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2218729, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKv023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2219370, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKw023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2219383, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWKx023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2220846, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL0023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2220859, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL1023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2222332, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL2023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2222345, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL3023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2223830, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL4023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2224172, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL5023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2224667, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL6023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2225589, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL7023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2225602, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL8023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2227073, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWL9023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2227086, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWLA023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2228549, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWLB023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2228562, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWLC023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2230028, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 038APWLD023513: to=postmaster, delay=22:04:14, xdelay=00:00:00, mailer=relay, pri=2230041, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0388PWKn022931: to=postmaster, delay=1+00:04:14, xdelay=00:00:00, mailer=relay, pri=2394918, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKn022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2481782, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKo022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2481795, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKp022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2482935, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKq022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2483266, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKr022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2483279, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKs022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2483433, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKt022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2484123, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKu022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2484750, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKv022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2484763, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKw022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2486234, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWKx022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2486247, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL0022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2487107, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL1022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2487718, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL2022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2487731, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL3022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2489199, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL4022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2489212, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL5022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2490681, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL6022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2490694, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL7022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2492165, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL8022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2492178, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWL9022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2493045, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWLA022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2493649, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0387PWLB022711: to=postmaster, delay=1+01:04:14, xdelay=00:00:00, mailer=relay, pri=2493662, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0386PWKn022492: to=postmaster, delay=1+02:04:14, xdelay=00:00:00, mailer=relay, pri=2585133, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0386PWKo022492: to=postmaster, delay=1+02:04:14, xdelay=00:00:00, mailer=relay, pri=2585146, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0386PWKp022492: to=postmaster, delay=1+02:04:14, xdelay=00:00:00, mailer=relay, pri=2586614, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0386PWKq022492: to=postmaster, delay=1+02:04:14, xdelay=00:00:00, mailer=relay, pri=2586627, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0386PWKr022492: to=postmaster, delay=1+02:04:14, xdelay=00:00:00, mailer=relay, pri=2588093, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0386PWKs022492: to=postmaster, delay=1+02:04:14, xdelay=00:00:00, mailer=relay, pri=2588106, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0384PWKn022043: to=postmaster, delay=1+04:04:14, xdelay=00:00:00, mailer=relay, pri=2760498, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0384PWKo022043: to=postmaster, delay=1+04:04:14, xdelay=00:00:00, mailer=relay, pri=2763472, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0381PWKn021381: to=postmaster, delay=1+07:04:14, xdelay=00:00:00, mailer=relay, pri=3021320, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKo020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3270000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKp020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3270000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKq020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3270000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKn020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3270000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037MPWKn020581: to=postmaster, delay=1+10:04:14, xdelay=00:00:00, mailer=relay, pri=3294266, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKr020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3381004, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKs020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3388577, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKt020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3389197, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKu020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3390843, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKw020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3391119, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKx020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3391119, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWKv020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3391119, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWL1020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3391199, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWL0020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3391199, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWL2020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3391546, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWL3020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3391672, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWL4020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3400484, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037LPWL5020340: to=postmaster, delay=1+11:04:14, xdelay=00:00:00, mailer=relay, pri=3402400, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKo019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3540000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKp019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3540000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKq019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3540000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKr019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3540000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKs019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3540000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKt019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3540000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKu019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3540000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKn019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3540000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKo019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKp019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKq019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKr019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKs019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKt019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKu019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKv019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKw019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL6019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKx019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL0019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL1019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL2019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL3019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL4019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL5019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL7019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWKn019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3630000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKv019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3649681, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKw019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3652645, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWKx019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3656392, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWL0019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3656405, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWL2019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3659184, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWL1019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3659184, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWL4019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3659197, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037IPWL3019662: to=postmaster, delay=1+14:04:14, xdelay=00:00:00, mailer=relay, pri=3659197, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL8019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3744740, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWL9019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3744753, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWLA019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3749184, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWLB019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3757664, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037HPWLC019420: to=postmaster, delay=1+15:04:14, xdelay=00:00:00, mailer=relay, pri=3759433, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037FPWKn006851: to=fail2ban@localhost, delay=1+17:04:15, xdelay=00:00:00, mailer=relay, pri=3811461, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037FPWKo006851: to=fail2ban@localhost, delay=1+17:04:15, xdelay=00:00:00, mailer=relay, pri=3811474, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKs006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKp006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKq006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKo006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKr006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKt006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKu006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKv006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKw006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKx006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWL0006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWL1006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWKn006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=3900000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037FPWKp006851: to=user@localhost, delay=1+17:04:15, xdelay=00:00:00, mailer=relay, pri=3953569, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037FPWKq006851: to=user@localhost, delay=1+17:04:15, xdelay=00:00:00, mailer=relay, pri=3953569, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037FPWKr006851: to=user@localhost, delay=1+17:04:15, xdelay=00:00:00, mailer=relay, pri=3953569, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWL2006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=4017235, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWL3006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=4020056, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWL4006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=4026042, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037EPWL5006470: to=postmaster, delay=1+18:04:14, xdelay=00:00:00, mailer=relay, pri=4027522, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037AmsDa103751: to=root@localhost, delay=1+21:41:19, xdelay=00:00:00, mailer=relay, pri=4260208, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037AmstR103772: to=root@localhost, delay=1+21:41:19, xdelay=00:00:00, mailer=relay, pri=4260221, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037BPWKn005269: to=postmaster, delay=1+21:04:14, xdelay=00:00:00, mailer=relay, pri=4297058, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037BPWKo005269: to=postmaster, delay=1+21:04:14, xdelay=00:00:00, mailer=relay, pri=4297071, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037BPWKp005269: to=postmaster, delay=1+21:04:14, xdelay=00:00:00, mailer=relay, pri=4298534, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037BPWKq005269: to=postmaster, delay=1+21:04:14, xdelay=00:00:00, mailer=relay, pri=4298547, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037BPWKr005269: to=postmaster, delay=1+21:04:14, xdelay=00:00:00, mailer=relay, pri=4300013, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037BPWKs005269: to=postmaster, delay=1+21:04:14, xdelay=00:00:00, mailer=relay, pri=4300026, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037APWKn091250: to=postmaster, delay=1+22:04:14, xdelay=00:00:00, mailer=relay, pri=4380843, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037APWKo091250: to=postmaster, delay=1+22:04:14, xdelay=00:00:00, mailer=relay, pri=4382317, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037APWKp091250: to=postmaster, delay=1+22:04:14, xdelay=00:00:00, mailer=relay, pri=4382330, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037APWKq091250: to=postmaster, delay=1+22:04:14, xdelay=00:00:00, mailer=relay, pri=4383815, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037APWKr091250: to=postmaster, delay=1+22:04:14, xdelay=00:00:00, mailer=relay, pri=4384090, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037APWKs091250: to=postmaster, delay=1+22:04:14, xdelay=00:00:00, mailer=relay, pri=4385574, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037APWKt091250: to=postmaster, delay=1+22:04:14, xdelay=00:00:00, mailer=relay, pri=4385587, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037AnF4O112019: to=root@localhost, delay=1+21:40:58, xdelay=00:00:00, mailer=relay, pri=4402386, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037AnJE8112299: to=root@localhost, delay=1+21:40:54, xdelay=00:00:00, mailer=relay, pri=4402386, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 037AnJpL112357: to=root@localhost, delay=1+21:40:54, xdelay=00:00:00, mailer=relay, pri=4402386, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKn081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4641772, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKo081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4641785, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKp081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4643256, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKq081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4643269, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKr081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4643423, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKs081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4643436, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKt081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4644740, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKu081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4644753, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKv081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4644908, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKw081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4644921, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWKx081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4645613, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL0081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4646224, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL1081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4646237, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL2081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4646392, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL3081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4646405, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL4081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4647705, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL5081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4647718, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL6081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4647876, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL7081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4647889, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL8081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4649184, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWL9081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4649352, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWLA081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4649365, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0377PWLB081884: to=postmaster, delay=2+01:04:14, xdelay=00:00:00, mailer=relay, pri=4650830, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKn078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4739197, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKo078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4740666, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKp078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4740679, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKq078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4742150, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKr078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4742163, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKs078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4743634, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKt078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4743647, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKu078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4745118, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKv078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4745131, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKw078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4746599, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWKx078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4746612, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWL0078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4748078, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0376PWL1078771: to=postmaster, delay=2+02:04:14, xdelay=00:00:00, mailer=relay, pri=4748091, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0370PWKn060079: to=postmaster, delay=2+08:04:14, xdelay=00:00:00, mailer=relay, pri=5283462, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0370PWKo060079: to=postmaster, delay=2+08:04:14, xdelay=00:00:00, mailer=relay, pri=5284946, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0370PWKp060079: to=postmaster, delay=2+08:04:14, xdelay=00:00:00, mailer=relay, pri=5293882, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036LPWKn050676: to=postmaster, delay=2+11:04:14, xdelay=00:00:00, mailer=relay, pri=5541146, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036LPWKo050676: to=postmaster, delay=2+11:04:14, xdelay=00:00:00, mailer=relay, pri=5548714, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036LPWKp050676: to=postmaster, delay=2+11:04:14, xdelay=00:00:00, mailer=relay, pri=5551541, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036LPWKq050676: to=postmaster, delay=2+11:04:14, xdelay=00:00:00, mailer=relay, pri=5553025, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKq041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKr041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKo041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKp041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKs041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKt041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKu041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKw041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKv041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL3041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL0041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKx041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL1041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL2041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWKn041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL4041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL5041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL6041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5700000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036HPWKr038247: to=postmaster, delay=2+15:04:14, xdelay=00:00:00, mailer=relay, pri=5790000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036HPWKp038247: to=postmaster, delay=2+15:04:14, xdelay=00:00:00, mailer=relay, pri=5790000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036HPWKq038247: to=postmaster, delay=2+15:04:14, xdelay=00:00:00, mailer=relay, pri=5790000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036HPWKo038247: to=postmaster, delay=2+15:04:14, xdelay=00:00:00, mailer=relay, pri=5790000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036HPWKn038247: to=postmaster, delay=2+15:04:14, xdelay=00:00:00, mailer=relay, pri=5790000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL7041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5809517, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL8041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5812346, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWL9041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5812537, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWLA041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5812643, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWLB041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5814261, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWLC041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5817092, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWLD041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5822312, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWLE041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5822325, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:13 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWLF041352: to=postmaster, delay=2+14:04:14, xdelay=00:00:00, mailer=relay, pri=5827953, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036IPWLG041352: to=postmaster, delay=2+14:04:15, xdelay=00:00:00, mailer=relay, pri=5831961, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036GPWKn035124: to=postmaster, delay=2+16:04:15, xdelay=00:00:00, mailer=relay, pri=5880000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKq028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKo028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKp028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKr028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKs028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKt028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKu028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKv028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKw028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKx028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL0028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWKn028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6060000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL1028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6170734, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL2028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6170899, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL3028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6171015, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL4028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6172640, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL5028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6180661, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL6028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6180674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL7028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6186037, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036EPWL8028915: to=postmaster, delay=2+18:04:15, xdelay=00:00:00, mailer=relay, pri=6190021, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036CPWKn022506: to=root, delay=2+20:04:15, xdelay=00:00:00, mailer=relay, pri=6240000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKn019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6445804, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKo019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6446445, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKp019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6446458, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKq019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6447288, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKr019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6447929, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKs019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6447942, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKt019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6449405, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKu019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6449418, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKv019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6450247, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKw019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6450883, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWKx019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6450896, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL0019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6451725, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL1019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6452370, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL2019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6452383, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL3019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6453868, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL4019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6454143, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL5019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6455569, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL6019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6455582, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL7019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6457053, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL8019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6457066, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWL9019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6458529, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWLA019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6458600, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 036BPWLB019006: to=postmaster, delay=2+21:04:15, xdelay=00:00:00, mailer=relay, pri=6460008, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKn012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6621780, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKo012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6624124, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKp012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6624903, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKq012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6624916, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKr012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6625608, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKs012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6628572, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKt012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6630051, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKu012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6630674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKv012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6632158, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKw012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6633629, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWKx012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6633642, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWL0012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6635113, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWL1012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6635126, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0369PWL2012734: to=postmaster, delay=2+23:04:15, xdelay=00:00:00, mailer=relay, pri=6636594, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0367PWKn006468: to=postmaster, delay=3+01:04:15, xdelay=00:00:00, mailer=relay, pri=6801767, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0367PWKo006468: to=postmaster, delay=3+01:04:15, xdelay=00:00:00, mailer=relay, pri=6803251, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0367PWKp006468: to=postmaster, delay=3+01:04:15, xdelay=00:00:00, mailer=relay, pri=6803264, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0367PWKq006468: to=postmaster, delay=3+01:04:15, xdelay=00:00:00, mailer=relay, pri=6803418, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0367PWKr006468: to=postmaster, delay=3+01:04:15, xdelay=00:00:00, mailer=relay, pri=6803431, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0367PWKs006468: to=postmaster, delay=3+01:04:15, xdelay=00:00:00, mailer=relay, pri=6804735, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0367PWKt006468: to=postmaster, delay=3+01:04:15, xdelay=00:00:00, mailer=relay, pri=6812145, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKn130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6984748, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKo130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6986219, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKp130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6986232, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKq130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6987700, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKr130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6987713, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKs130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6989179, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKt130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6989192, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKu130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6990661, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKv130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6996607, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKw130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6998073, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0365PWKx130929: to=postmaster, delay=3+03:04:15, xdelay=00:00:00, mailer=relay, pri=6998086, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0360PWKn115366: to=postmaster, delay=3+08:04:15, xdelay=00:00:00, mailer=relay, pri=7320000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0361PWKn118475: to=postmaster, delay=3+07:04:15, xdelay=00:00:00, mailer=relay, pri=7360026, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0361PWKo118475: to=postmaster, delay=3+07:04:15, xdelay=00:00:00, mailer=relay, pri=7360039, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0360PWKo115366: to=postmaster, delay=3+08:04:15, xdelay=00:00:00, mailer=relay, pri=7443172, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0360PWKp115366: to=postmaster, delay=3+08:04:15, xdelay=00:00:00, mailer=relay, pri=7445057, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0360PWKq115366: to=postmaster, delay=3+08:04:15, xdelay=00:00:00, mailer=relay, pri=7449750, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKn102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7798727, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKo102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7801554, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKq102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802325, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKr102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802325, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKt102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802325, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKs102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802325, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKu102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802325, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKp102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802325, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWL1102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802338, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKw102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802338, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKx102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802338, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWL0102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802338, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWL2102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802338, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035KPWKv102860: to=postmaster, delay=3+12:04:15, xdelay=00:00:00, mailer=relay, pri=7802338, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKn099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7893082, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKp099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7898254, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKq099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7898254, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKr099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7898254, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKo099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7898254, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKt099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7898267, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKu099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7898267, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKv099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7898267, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035JPWKs099751: to=postmaster, delay=3+13:04:15, xdelay=00:00:00, mailer=relay, pri=7898267, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035HPWKr093534: to=root, delay=3+15:04:15, xdelay=00:00:00, mailer=relay, pri=7950000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKq090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKs090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKo090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKv090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKp090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKu090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKr090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKt090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKw090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKx090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL0090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL1090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL2090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL3090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL4090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL5090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLG090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLH090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLB090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLC090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLD090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLI090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLE090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLF090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL6090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL7090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL8090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWL9090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLA090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLJ090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLK090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLL090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWKn090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8040000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035HPWKo093534: to=postmaster, delay=3+15:04:15, xdelay=00:00:00, mailer=relay, pri=8078102, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035HPWKn093534: to=postmaster, delay=3+15:04:15, xdelay=00:00:00, mailer=relay, pri=8078102, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035HPWKp093534: to=postmaster, delay=3+15:04:15, xdelay=00:00:00, mailer=relay, pri=8082001, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035HPWKq093534: to=postmaster, delay=3+15:04:15, xdelay=00:00:00, mailer=relay, pri=8083917, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLM090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8149833, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLN090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8152653, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLO090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8154274, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLP090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8157105, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLS090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLT090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLU090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLV090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLR090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLQ090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLX090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160687, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLY090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160687, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLZ090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160687, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLa090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160687, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLb090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160687, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLW090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8160687, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLc090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8164566, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLd090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166188, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLf090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166607, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLe090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166607, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLg090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166607, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLh090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166607, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLj090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166620, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLk090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166620, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLl090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166620, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLi090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8166620, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLm090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8167079, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLn090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8168089, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLo090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8168542, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035GPWLp090414: to=postmaster, delay=3+16:04:15, xdelay=00:00:00, mailer=relay, pri=8168555, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035EPWKn084187: to=postmaster, delay=3+18:04:15, xdelay=00:00:00, mailer=relay, pri=8220000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKq080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8310000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKp080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8310000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKo080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8310000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKr080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8310000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKt080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8310000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKs080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8310000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKn080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8310000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKu080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8426413, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKv080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8427884, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKw080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8427897, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWKx080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8429360, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWL0080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8429373, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWL1080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8430202, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWL2080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8430838, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWL3080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8430851, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWL4080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8431664, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035DPWL5080876: to=postmaster, delay=3+19:04:15, xdelay=00:00:00, mailer=relay, pri=8437066, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035CPWKn077764: to=postmaster, delay=3+20:04:15, xdelay=00:00:00, mailer=relay, pri=8508199, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035CPWKo077764: to=postmaster, delay=3+20:04:15, xdelay=00:00:00, mailer=relay, pri=8511175, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035CPWKp077764: to=postmaster, delay=3+20:04:15, xdelay=00:00:00, mailer=relay, pri=8511948, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035CPWKq077764: to=postmaster, delay=3+20:04:15, xdelay=00:00:00, mailer=relay, pri=8511961, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035CPWKr077764: to=postmaster, delay=3+20:04:15, xdelay=00:00:00, mailer=relay, pri=8512792, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035CPWKs077764: to=postmaster, delay=3+20:04:15, xdelay=00:00:00, mailer=relay, pri=8513431, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035CPWKt077764: to=postmaster, delay=3+20:04:15, xdelay=00:00:00, mailer=relay, pri=8513444, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035CPWKu077764: to=postmaster, delay=3+20:04:15, xdelay=00:00:00, mailer=relay, pri=8514916, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035BPWKn074295: to=postmaster, delay=3+21:04:15, xdelay=00:00:00, mailer=relay, pri=8604929, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 035BPWKo074295: to=postmaster, delay=3+21:04:15, xdelay=00:00:00, mailer=relay, pri=8606400, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKn064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8869546, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKo064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8871164, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKp064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8877713, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKq064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8877726, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKr064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8878585, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKs064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8879192, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKt064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8879205, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKu064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8880048, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKv064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8880674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKw064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8880687, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWKx064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8882158, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL0064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8882171, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL1064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8882338, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL2064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8882614, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL3064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8883642, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL4064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8883655, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL5064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8884098, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL6064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8884111, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL7064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8885126, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL8064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8885139, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWL9064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8885582, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWLA064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8885595, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWLB064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8886607, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0358PWLC064934: to=postmaster, delay=4+00:04:15, xdelay=00:00:00, mailer=relay, pri=8886620, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKn055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9140290, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKo055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9140303, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKp055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9141780, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKq055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9141793, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKr055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9143264, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKs055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9143277, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKt055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9144748, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKu055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9144761, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKv055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9146232, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0355PWKw055600: to=postmaster, delay=4+03:04:15, xdelay=00:00:00, mailer=relay, pri=9146245, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034NPWKn036905: to=postmaster, delay=4+09:04:15, xdelay=00:00:00, mailer=relay, pri=9695003, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034JPWKo024410: to=postmaster, delay=4+13:04:15, xdelay=00:00:00, mailer=relay, pri=9930000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034JPWKn024410: to=postmaster, delay=4+13:04:15, xdelay=00:00:00, mailer=relay, pri=9930000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034JPWKp024410: to=postmaster, delay=4+13:04:15, xdelay=00:00:00, mailer=relay, pri=10039370, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034JPWKq024410: to=postmaster, delay=4+13:04:15, xdelay=00:00:00, mailer=relay, pri=10039561, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034JPWKr024410: to=postmaster, delay=4+13:04:15, xdelay=00:00:00, mailer=relay, pri=10046058, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034JPWKs024410: to=postmaster, delay=4+13:04:15, xdelay=00:00:00, mailer=relay, pri=10053087, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034JPWKt024410: to=postmaster, delay=4+13:04:15, xdelay=00:00:00, mailer=relay, pri=10053815, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034JPWKu024410: to=postmaster, delay=4+13:04:15, xdelay=00:00:00, mailer=relay, pri=10053828, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034HPWKo018193: to=postmaster, delay=4+15:04:15, xdelay=00:00:00, mailer=relay, pri=10110000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034HPWKp018193: to=postmaster, delay=4+15:04:15, xdelay=00:00:00, mailer=relay, pri=10110000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034HPWKq018193: to=postmaster, delay=4+15:04:15, xdelay=00:00:00, mailer=relay, pri=10110000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034HPWKr018193: to=postmaster, delay=4+15:04:15, xdelay=00:00:00, mailer=relay, pri=10110000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034HPWKs018193: to=postmaster, delay=4+15:04:15, xdelay=00:00:00, mailer=relay, pri=10110000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034HPWKt018193: to=postmaster, delay=4+15:04:15, xdelay=00:00:00, mailer=relay, pri=10110000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034HPWKn018193: to=postmaster, delay=4+15:04:15, xdelay=00:00:00, mailer=relay, pri=10110000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKp015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10200000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKo015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10200000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKn015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10200000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKo011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKr011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKs011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKu011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKq011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKt011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKp011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKv011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKw011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKx011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL0011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL1011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL2011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL3011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL4011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL5011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL6011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL7011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL8011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWLD011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWLE011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWLF011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWLG011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWL9011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWLA011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWLB011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWLC011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034FPWKn011925: to=postmaster, delay=4+17:04:15, xdelay=00:00:00, mailer=relay, pri=10290000, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKq015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10307752, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKr015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10307917, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKs015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10314142, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKt015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10322163, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKu015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10322176, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKv015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10330497, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034GPWKw015045: to=postmaster, delay=4+16:04:15, xdelay=00:00:00, mailer=relay, pri=10332413, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034CPWKn002466: to=postmaster, delay=4+20:04:15, xdelay=00:00:00, mailer=relay, pri=10674280, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034CPWKo002466: to=postmaster, delay=4+20:04:15, xdelay=00:00:00, mailer=relay, pri=10677248, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034CPWKp002466: to=postmaster, delay=4+20:04:15, xdelay=00:00:00, mailer=relay, pri=10678732, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034CPWKq002466: to=postmaster, delay=4+20:04:15, xdelay=00:00:00, mailer=relay, pri=10683180, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 034C26A8001128: to=root, ctladdr=root (0/0), delay=4+20:28:08, xdelay=00:00:00, mailer=relay, pri=10759555, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0349PWKn123397: to=postmaster, delay=4+23:04:15, xdelay=00:00:00, mailer=relay, pri=10939833, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0349PWKo123397: to=postmaster, delay=4+23:04:15, xdelay=00:00:00, mailer=relay, pri=10941175, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0349PWKp123397: to=postmaster, delay=4+23:04:15, xdelay=00:00:00, mailer=relay, pri=10942801, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0349PWKq123397: to=postmaster, delay=4+23:04:15, xdelay=00:00:00, mailer=relay, pri=10958542, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0349PWKr123397: to=postmaster, delay=4+23:04:15, xdelay=00:00:00, mailer=relay, pri=10958555, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKn120289: to=postmaster, delay=5+00:04:15, xdelay=00:00:00, mailer=relay, pri=11044103, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKn120289: 0398TlbO015093: return to sender: Cannot send message for 5 days
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0398TlbO015093: to=postmaster, delay=00:00:00, xdelay=00:00:00, mailer=relay, pri=155594, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKo120289: to=postmaster, delay=5+00:04:15, xdelay=00:00:00, mailer=relay, pri=11044183, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKo120289: 0398TlbP015093: return to sender: Cannot send message for 5 days
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0398TlbP015093: to=postmaster, delay=00:00:00, xdelay=00:00:00, mailer=relay, pri=155674, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKp120289: to=postmaster, delay=5+00:04:15, xdelay=00:00:00, mailer=relay, pri=11045587, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKp120289: 0398TlbQ015093: return to sender: Cannot send message for 5 days
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0398TlbQ015093: to=postmaster, delay=00:00:00, xdelay=00:00:00, mailer=relay, pri=157078, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKq120289: to=postmaster, delay=5+00:04:15, xdelay=00:00:00, mailer=relay, pri=11045600, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKq120289: 0398TlbR015093: return to sender: Cannot send message for 5 days
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0398TlbR015093: to=postmaster, delay=00:00:00, xdelay=00:00:00, mailer=relay, pri=157091, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKr120289: to=postmaster, delay=5+00:04:15, xdelay=00:00:00, mailer=relay, pri=11047063, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKr120289: 0398TlbS015093: return to sender: Cannot send message for 5 days
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0398TlbS015093: to=postmaster, delay=00:00:00, xdelay=00:00:00, mailer=relay, pri=158554, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKs120289: to=postmaster, delay=5+00:04:15, xdelay=00:00:00, mailer=relay, pri=11047076, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0348PWKs120289: 0398TlbT015093: return to sender: Cannot send message for 5 days
Apr 09 09:30:14 infraportal.stfc.ac.uk sm-msp-queue[15093]: 0398TlbT015093: to=postmaster, delay=00:00:00, xdelay=00:00:00, mailer=relay, pri=158567, relay=csf-mail.rl.ac.uk, dsn=4.0.0, stat=Deferred
Apr 09 09:33:35 infraportal.stfc.ac.uk ncd[15110]: NCM-NCD version 18.6.0 started by root at: Thu Apr  9 09:33:35 2020
Apr 09 09:33:35 infraportal.stfc.ac.uk ncd[15110]: Using profile CID 174 name infraportal_production-sandbox-nxi59545
Apr 09 09:33:35 infraportal.stfc.ac.uk ncd[15110]: [1;31mNon-existing component checkconfig# specified[0m
Apr 09 09:33:35 infraportal.stfc.ac.uk ncd[15110]: [1;31mNo components to dispatch.[0m
Apr 09 09:33:37 infraportal.stfc.ac.uk ncd[15113]: NCM-NCD version 18.6.0 started by root at: Thu Apr  9 09:33:37 2020
Apr 09 09:33:37 infraportal.stfc.ac.uk ncd[15113]: Using profile CID 174 name infraportal_production-sandbox-nxi59545
Apr 09 09:33:38 infraportal.stfc.ac.uk ncd[15113]: [1;31mNon-existing component checkconfig specified[0m
Apr 09 09:33:38 infraportal.stfc.ac.uk ncd[15113]: [1;31mNo components to dispatch.[0m
Apr 09 09:34:45 infraportal.stfc.ac.uk ncd[15128]: NCM-NCD version 18.6.0 started by root at: Thu Apr  9 09:34:45 2020
Apr 09 09:34:45 infraportal.stfc.ac.uk ncd[15128]: Using profile CID 174 name infraportal_production-sandbox-nxi59545
Apr 09 09:34:45 infraportal.stfc.ac.uk ncd[15128]: [1;31mNon-existing component checkcfg specified[0m
Apr 09 09:34:45 infraportal.stfc.ac.uk ncd[15128]: [1;31mNo components to dispatch.[0m
Apr 09 09:35:03 infraportal.stfc.ac.uk ncd[15132]: NCM-NCD version 18.6.0 started by root at: Thu Apr  9 09:35:03 2020
Apr 09 09:35:03 infraportal.stfc.ac.uk ncd[15132]: Using profile CID 174 name infraportal_production-sandbox-nxi59545
Apr 09 09:35:03 infraportal.stfc.ac.uk ncd[15132]: executing configure on components....
Apr 09 09:35:03 infraportal.stfc.ac.uk ncd[15132]: running component: spma
Apr 09 09:36:07 infraportal.stfc.ac.uk component-spma[15132]: configure on component spma executed, 0 errors, 0 warnings
Apr 09 09:36:07 infraportal.stfc.ac.uk ncd[15132]: running component: chkconfig
Apr 09 09:36:07 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:15146:4719290 (system bus name :1.353 [/usr/bin/pkttyagent --notify-fd 5 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:36:07 infraportal.stfc.ac.uk systemd[1]: Reloading.
Apr 09 09:36:07 infraportal.stfc.ac.uk systemd[1]: [1;39mBinding to IPv6 address not available since kernel does not support IPv6.[0m
Apr 09 09:36:07 infraportal.stfc.ac.uk systemd[1]: [1;39mBinding to IPv6 address not available since kernel does not support IPv6.[0m
Apr 09 09:36:07 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:15146:4719290 (system bus name :1.353, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:36:07 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:15166:4719297 (system bus name :1.354 [/usr/bin/pkttyagent --notify-fd 5 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:36:07 infraportal.stfc.ac.uk systemd[1]: Reloading.
Apr 09 09:36:07 infraportal.stfc.ac.uk systemd[1]: [1;39mBinding to IPv6 address not available since kernel does not support IPv6.[0m
Apr 09 09:36:07 infraportal.stfc.ac.uk systemd[1]: [1;39mBinding to IPv6 address not available since kernel does not support IPv6.[0m
Apr 09 09:36:07 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:15166:4719297 (system bus name :1.354, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:36:07 infraportal.stfc.ac.uk component-chkconfig[15132]: Only unitfile configuration for unit nrpe.service (state enabled startstop 1 type service shortname nrpe targets multi-user.target possible_missing 0)
Apr 09 09:36:09 infraportal.stfc.ac.uk component-chkconfig[15132]: is_ufstate: unit nfs-idmapd.service with UnitFileState 'static' is a static unit. Not going to force the state to enabled and assume this is ok.
Apr 09 09:36:09 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:15291:4719454 (system bus name :1.355 [/usr/bin/pkttyagent --notify-fd 5 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:36:09 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsi.service, ignoring: Unit not found.[0m
Apr 09 09:36:09 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsid.socket, ignoring: Unit not found.[0m
Apr 09 09:36:09 infraportal.stfc.ac.uk systemd[1]: Starting NIS/YP (Network Information Service) Clients to NIS Domain Binder...
-- Subject: Unit ypbind.service has begun start-up
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit ypbind.service has begun starting up.
Apr 09 09:36:09 infraportal.stfc.ac.uk setsebool[15303]: setsebool:  SELinux is disabled.
Apr 09 09:36:09 infraportal.stfc.ac.uk ypbind[15312]: [1;39mBinding NIS service[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk ypbind[15327]: [1;39mBinding took 51 seconds[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk ypbind[15329]: [1;39mNIS server for domain csf is not responding.[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk ypbind[15330]: [1;39mKilling ypbind with PID 15307.[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk ypbind[15331]: [1;39mTry increase NISTIMEOUT in /etc/sysconfig/ypbind[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk systemd[1]: [1;39mypbind.service: control process exited, code=exited status=1[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk systemd[1]: [1;31mFailed to start NIS/YP (Network Information Service) Clients to NIS Domain Binder.[0m
-- Subject: Unit ypbind.service has failed
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit ypbind.service has failed.
-- 
-- The result is failed.
Apr 09 09:37:00 infraportal.stfc.ac.uk systemd[1]: [1;39mUnit ypbind.service entered failed state.[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk systemd[1]: [1;39mypbind.service failed.[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:15291:4719454 (system bus name :1.355, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk component-chkconfig[15132]: [1;31msystemctl_command_units /usr/bin/systemctl start -- ypbind.service returned ec 256 and output Job for ypbind.service failed because the control process exited with error code. See "systemctl status ypbind.service" and "journalctl -xe" for details.[0m
Apr 09 09:37:00 infraportal.stfc.ac.uk component-chkconfig[15132]: configure on component chkconfig executed, 1 errors, 0 warnings
Apr 09 09:37:00 infraportal.stfc.ac.uk ncd[15132]: Errors while configuring chkconfig (1)
Apr 09 09:37:00 infraportal.stfc.ac.uk ncd[15132]: [1;31m1 errors, 0 warnings executing configure[0m
Apr 09 09:40:01 infraportal.stfc.ac.uk systemd[1]: Started Session 147 of user root.
-- Subject: Unit session-147.scope has finished start-up
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit session-147.scope has finished starting up.
-- 
-- The start-up result is done.
Apr 09 09:40:01 infraportal.stfc.ac.uk CROND[15344]: (root) CMD (/usr/lib64/sa/sa1 1 1)
Apr 09 09:43:04 infraportal.stfc.ac.uk polkitd[1746]: [1;39mRegistered Authentication Agent for unix-process:15370:4760971 (system bus name :1.359 [/usr/bin/pkttyagent --notify-fd 5 --fallback], object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8)[0m
Apr 09 09:43:04 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsi.service, ignoring: Unit not found.[0m
Apr 09 09:43:04 infraportal.stfc.ac.uk systemd[1]: [1;39mCannot add dependency job for unit iscsid.socket, ignoring: Unit not found.[0m
Apr 09 09:43:04 infraportal.stfc.ac.uk systemd[1]: Starting NIS/YP (Network Information Service) Clients to NIS Domain Binder...
-- Subject: Unit ypbind.service has begun start-up
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit ypbind.service has begun starting up.
Apr 09 09:43:04 infraportal.stfc.ac.uk setsebool[15380]: setsebool:  SELinux is disabled.
Apr 09 09:43:04 infraportal.stfc.ac.uk ypbind[15389]: [1;39mBinding NIS service[0m
Apr 09 09:43:52 infraportal.stfc.ac.uk polkitd[1746]: [1;39mUnregistered Authentication Agent for unix-process:15370:4760971 (system bus name :1.359, object path /org/freedesktop/PolicyKit1/AuthenticationAgent, locale en_US.UTF-8) (disconnected from bus)[0m
Apr 09 09:43:55 infraportal.stfc.ac.uk ypbind[15404]: [1;39mBinding took 51 seconds[0m
Apr 09 09:43:55 infraportal.stfc.ac.uk ypbind[15406]: [1;39mNIS server for domain csf is not responding.[0m
Apr 09 09:43:55 infraportal.stfc.ac.uk ypbind[15407]: [1;39mKilling ypbind with PID 15384.[0m
Apr 09 09:43:55 infraportal.stfc.ac.uk ypbind[15408]: [1;39mTry increase NISTIMEOUT in /etc/sysconfig/ypbind[0m
Apr 09 09:43:55 infraportal.stfc.ac.uk systemd[1]: [1;39mypbind.service: control process exited, code=exited status=1[0m
Apr 09 09:43:55 infraportal.stfc.ac.uk systemd[1]: [1;31mFailed to start NIS/YP (Network Information Service) Clients to NIS Domain Binder.[0m
-- Subject: Unit ypbind.service has failed
-- Defined-By: systemd
-- Support: http://lists.freedesktop.org/mailman/listinfo/systemd-devel
-- 
-- Unit ypbind.service has failed.
-- 
-- The result is failed.
Apr 09 09:43:55 infraportal.stfc.ac.uk systemd[1]: [1;39mUnit ypbind.service entered failed state.[0m
Apr 09 09:43:55 infraportal.stfc.ac.uk systemd[1]: [1;39mypbind.service failed.[0m
