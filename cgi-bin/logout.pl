#!/usr/bin/perl

use strict;
use warnings;

use CGI;
use CGI::Session;
use CGI::Session::Plugin::Redirect;

my $q = CGI->new;
#my $sid = $q->cookie("CGISESSID") || undef;
#my $session = new CGI::Session(undef, $sid, {Directory=>'/tmp'});
#	my $session = new CGI::Session(undef, $q->cookie("CGISESSID"), {Directory=>'/tmp'});
#	$session->delete();
#	undef($session);
#	print "Location: ../loginPage.html\n\n";
#$session->delete();
#undef($session);
#my $cookie = $q->cookie(-name=>'CGISESSID', -expires=>'-1');
print $q->redirect(-uri => '../loginPage.html');
