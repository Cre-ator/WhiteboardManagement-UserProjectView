<?php
auth_reauthenticate();
access_ensure_global_level( config_get( 'UserProjectAccessLevel' ) );

form_security_validate( 'plugin_UserProjectView_config_update' );

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$ShowInFooter = gpc_get_int( 'ShowInFooter', ON );

if ( plugin_config_get( 'ShowInFooter' ) != $ShowInFooter )
{
   plugin_config_set( 'ShowInFooter', $ShowInFooter );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$ShowMenu = gpc_get_int( 'ShowMenu', ON );

if ( plugin_config_get( 'ShowMenu' ) != $ShowMenu )
{
   plugin_config_set( 'ShowMenu', $ShowMenu );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$ShowInactiveUserHighlighting = gpc_get_int( 'IAUserHighlighting', OFF );

if ( plugin_config_get( 'IAUserHighlighting' ) != $ShowInactiveUserHighlighting )
{
	plugin_config_set( 'IAUserHighlighting', $ShowInactiveUserHighlighting );
}


$iAbackgroundcolor = gpc_get_string( 'IABGColor', '#663300' );

if ( plugin_config_get( 'IABGColor' ) != $iAbackgroundcolor && plugin_config_get( 'IABGColor' ) != '' )
{
	plugin_config_set( 'IABGColor', $iAbackgroundcolor );
}
elseif (plugin_config_get( 'IABGColor' ) == '' )
{
	plugin_config_set( 'IABGColor', '#663300' );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$ShowUnreachableIssuesHighlighting = gpc_get_int( 'URUserHighlighting', OFF );

if ( plugin_config_get( 'URUserHighlighting' ) != $ShowUnreachableIssuesHighlighting )
{
	plugin_config_set( 'URUserHighlighting', $ShowUnreachableIssuesHighlighting );
}


$uRbackgroundcolor = gpc_get_string( 'URBGColor', '#663300' );

if ( plugin_config_get( 'URBGColor' ) != $uRbackgroundcolor && plugin_config_get( 'URBGColor' ) != '' )
{
	plugin_config_set( 'URBGColor', $uRbackgroundcolor );
}
elseif (plugin_config_get( 'URBGColor' ) == '' )
{
	plugin_config_set( 'URBGColor', '#663300' );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$noUserIssueHighlighting = gpc_get_int( 'NUIssueHighlighting', OFF );

if ( plugin_config_get( 'NUIssueHighlighting' ) != $noUserIssueHighlighting )
{
	plugin_config_set( 'NUIssueHighlighting', $noUserIssueHighlighting );
}


$nUBackgroundColor = gpc_get_string( 'NUBGColor', '#663300' );

if ( plugin_config_get( 'NUBGColor' ) != $nUBackgroundColor && plugin_config_get( 'NUBGColor' ) != '' )
{
	plugin_config_set( 'NUBGColor', $nUBackgroundColor );
}
elseif (plugin_config_get( 'NUBGColor' ) == '' )
{
	plugin_config_set( 'NUBGColor', '#663300' );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$showZIUsers = gpc_get_int( 'ShowZIUsers', OFF );

if ( plugin_config_get( 'ShowZIUsers' ) != $showZIUsers )
{
	plugin_config_set( 'ShowZIUsers', $showZIUsers );
}

$zIssueHighlighting = gpc_get_int( 'ZIssueHighlighting', OFF );

if ( plugin_config_get( 'ZIssueHighlighting' ) != $zIssueHighlighting )
{
	plugin_config_set( 'ZIssueHighlighting', $zIssueHighlighting );
}


$zIBackgroundColor = gpc_get_string( 'ZIBGColor', '#663300' );

if ( plugin_config_get( 'ZIBGColor' ) != $zIBackgroundColor && plugin_config_get( 'ZIBGColor' ) != '' )
{
	plugin_config_set( 'ZIBGColor', $zIBackgroundColor );
}
elseif (plugin_config_get( 'ZIBGColor' ) == '' )
{
	plugin_config_set( 'ZIBGColor', '#663300' );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$colAmount = gpc_get_string( 'colAmount', 1 );

if ( plugin_config_get( 'colAmount' ) != $colAmount && plugin_config_get( 'colAmount' ) != '' )
{
	plugin_config_set( 'colAmount', $colAmount );
}
elseif (plugin_config_get( 'colAmount' ) == '' )
{
	plugin_config_set( 'colAmount', 1 );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$cTFHighlighting = gpc_get_int( 'CTFHighlighting', OFF );

if ( plugin_config_get( 'CTFHighlighting' ) != $cTFHighlighting )
{
	plugin_config_set( 'CTFHighlighting', $cTFHighlighting );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$oIHighlighting = gpc_get_int( 'OIHighlighting', OFF );

if ( plugin_config_get( 'OIHighlighting' ) != $oIHighlighting )
{
	plugin_config_set( 'OIHighlighting', $oIHighlighting );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$statselectcol1 = gpc_get_int( 'statselectcol1', 50 );

if ( plugin_config_get( 'statselectcol1' ) != $statselectcol1 )
{
	plugin_config_set( 'statselectcol1', $statselectcol1 );
}

$statselectcol2 = gpc_get_int( 'statselectcol2', 50 );

if ( plugin_config_get( 'statselectcol2' ) != $statselectcol2 )
{
	plugin_config_set( 'statselectcol2', $statselectcol2 );
}

$statselectcol3 = gpc_get_int( 'statselectcol3', 50 );

if ( plugin_config_get( 'statselectcol3' ) != $statselectcol3 )
{
	plugin_config_set( 'statselectcol3', $statselectcol3 );
}

if ( !empty( $_POST['UnreachableIssueThreshold'] ) )
{
	foreach ( $_POST['UnreachableIssueThreshold'] as $unreachableIssueThreshold )
	{
		$unreachableIssueThreshold = gpc_get_int_array( 'UnreachableIssueThreshold' );
		if ( plugin_config_get( 'UnreachableIssueThreshold' ) != $unreachableIssueThreshold )
		{
			plugin_config_set( 'UnreachableIssueThreshold', $unreachableIssueThreshold );
		}
	}
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$issueThreshold1 = gpc_get_int( 'issueThreshold1', 5 );

if ( plugin_config_get( 'issueThreshold1' ) != $issueThreshold1 )
{
	plugin_config_set( 'issueThreshold1', $issueThreshold1 );
}

$issueThreshold2 = gpc_get_int( 'issueThreshold2', 5 );

if ( plugin_config_get( 'issueThreshold2' ) != $issueThreshold2 )
{
	plugin_config_set( 'issueThreshold2', $issueThreshold2 );
}

$issueThreshold3 = gpc_get_int( 'issueThreshold3', 5 );

if ( plugin_config_get( 'issueThreshold3' ) != $issueThreshold3 )
{
	plugin_config_set( 'issueThreshold3', $issueThreshold3 );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$iTBGColor = gpc_get_string( 'ITBGColor', '#663300' );

if ( plugin_config_get( 'ITBGColor' ) != $iTBGColor && plugin_config_get( 'ITBGColor' ) != '' )
{
	plugin_config_set( 'ITBGColor', $iTBGColor );
}
elseif (plugin_config_get( 'ITBGColor' ) == '' )
{
	plugin_config_set( 'ITBGColor', '#663300' );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$oldIssueThreshold1 = gpc_get_int( 'oldIssueThreshold1', 30 );

if ( plugin_config_get( 'oldIssueThreshold1' ) != $oldIssueThreshold1 )
{
	plugin_config_set( 'oldIssueThreshold1', $oldIssueThreshold1 );
}

$oldIssueThreshold2 = gpc_get_int( 'oldIssueThreshold2', 30 );

if ( plugin_config_get( 'oldIssueThreshold2' ) != $oldIssueThreshold2 )
{
	plugin_config_set( 'oldIssueThreshold2', $oldIssueThreshold2 );
}

$oldIssueThreshold3 = gpc_get_int( 'oldIssueThreshold3', 30 );

if ( plugin_config_get( 'oldIssueThreshold3' ) != $oldIssueThreshold3 )
{
	plugin_config_set( 'oldIssueThreshold3', $oldIssueThreshold3 );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$UserProjectAccessLevel = gpc_get_int( 'UserProjectAccessLevel' );

if ( plugin_config_get( 'UserProjectAccessLevel' ) != $UserProjectAccessLevel )
{
   plugin_config_set( 'UserProjectAccessLevel', $UserProjectAccessLevel );
}

form_security_purge( 'plugin_UserProjectView_config_update' );

print_successful_redirect( plugin_page( 'config_page', true ) );