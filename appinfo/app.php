<?php
use OCA\LdapContacts\AppInfo\Application;
use OCP\Server;
use OCP\App\IAppManager;

if (Server::get(IAppManager::class)->isInstalled('user_ldap')) {
	$app = new Application();
	$app->registerNavigation();
}
