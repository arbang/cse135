#!/usr/bin/perl
use strict;
use warnings; 

 use CGI;
 use CGI::Session;

 use CGI::Session::Plugin::Redirect;

 use HTTP::Request::Common qw(POST);

 my $q = CGI->new;
 my $username = $q->param('username');
 my $password = $q->param('password');
 my $hardcodedpw = 'opensesame';
 my $flag = 1;

  if($password ne $hardcodedpw)
  {
    print $q->redirect('../loginerror.html');
  }
  else
  {
	my $session = new CGI::Session("driver:File", undef, {Directory=>"/tmp"});
	my $cookie = $q->cookie(CGISESSID => $session->id);
	#print $session->redirect('dashboard_perl.pl');
	#$q->redirect( -cookie=>$cookie);
	#print "Set-Cookie: name=CGISESSID; path=/; domain=192.241.238.27; expires=12/31/2015;\n";
	#print $q->header( -cookie=>$cookie);
  	#print $session->redirect('dashboard_perl.pl');
	#print $q->header( -cookie=>$cookie);
	#print qq~<meta http-equiv="refresh" content="0;URL=dashboard_perl.pl">\n~;
	print $q->redirect(-uri => 'dashboard_perl.pl', -cookie=>$cookie);
  } 
