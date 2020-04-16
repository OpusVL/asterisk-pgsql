insert into ps_aors (id, max_contacts) values (801, 1);
insert into ps_aors (id, max_contacts) values (802, 1);
insert into ps_aors (id, max_contacts) values (803, 1);
insert into ps_aors (id, max_contacts) values (804, 1);
insert into ps_aors (id, max_contacts) values (805, 1);

insert into ps_auths (id, auth_type, password, username) values (801, 'userpass', 'Obelix', 801);
insert into ps_auths (id, auth_type, password, username) values (802, 'userpass', 'Obelix', 802);
insert into ps_auths (id, auth_type, password, username) values (803, 'userpass', 'Obelix', 803);
insert into ps_auths (id, auth_type, password, username) values (804, 'userpass', 'Obelix', 804);
insert into ps_auths (id, auth_type, password, username) values (805, 'userpass', 'Obelix', 805);

insert into ps_endpoints (id, aors, auth, context, allow, direct_media, dtls_auto_generate_cert, media_encryption) values (801, '801', '801', 'call-router', 'ulaw|alaw|g722|gsm|opus', 'no', 'yes', 'sdes');
insert into ps_endpoints (id, aors, auth, context, allow, direct_media, dtls_auto_generate_cert, media_encryption) values (802, '802', '802', 'call-router', 'ulaw|alaw|g722|gsm|opus', 'no', 'yes', 'sdes');
insert into ps_endpoints (id, aors, auth, context, allow, direct_media, dtls_auto_generate_cert, media_encryption) values (803, '803', '803', 'call-router', 'ulaw|alaw|g722|gsm|opus', 'no', 'yes', 'sdes');
insert into ps_endpoints (id, aors, auth, context, allow, direct_media, dtls_auto_generate_cert, media_encryption) values (804, '804', '804', 'call-router', 'ulaw|alaw|g722|gsm|opus', 'no', 'yes', 'sdes');
insert into ps_endpoints (id, aors, auth, context, allow, direct_media, dtls_auto_generate_cert, media_encryption) values (805, '805', '805', 'call-router', 'ulaw|alaw|g722|gsm|opus', 'no', 'yes', 'sdes');