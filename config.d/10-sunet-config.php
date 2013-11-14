<?php
global $Config;

# The Shibboleth URL for login
$Config['ShibbolethURL'] = 'https://mailfilter.sunet.se/Shibboleth.sso/DS/ds.sunet.se';

# The first part of the target URL (https://machine.example.org/)
$Config['ShibbolethTarget'] = 'https://mailfilter.sunet.se';

# The local logout URL for Shibboleth
$Config['ShibbolethLogout'] = 'https://mailfilter.sunet.se/Shibboleth.sso/Logout';

# The user who should be converted to "base:admin"
$Config['ShibbolethAdminEPPN'] = '';

# The login text
$Config['ShibbolethLoginMsg'] = 'Login using SWAMID';

# The next three lines are required to enable Shibboleth auth.
if ($_SERVER['SERVER_NAME'] == 'e-mailfilter0X.sunet.se') {
    $Config['Theme:Name'] = 'postmodern';
} else {
    $Config['Theme:Name'] = 'SUNET';
    $Config['SessionFactory:Include'] = 'classes/session_factory_shibboleth_multirealm.php';
    $Config['SessionFactory:Class'] = 'SessionFactoryShibboleth';
}
$Config['ShibbolethIdPField'] = 1;
$Config['URL:shibboleth-pick-realm'] = 'shibboleth-pick-realm.php';

?>
