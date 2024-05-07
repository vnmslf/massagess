<?php

namespace Bitrix\Main\Routing;

// system part
$routes = new RoutingConfigurator;
$routes->setRouter(new Router);

// user part
/** @var RoutingConfigurator $routes */

$routes->middleware(['roleDeterminant'])->prefix('servicelines')->group(function (RoutingConfigurator $routes) {
	//��������� ���� ��������� ����� ������������
	$routes->get('/handbook/profiles', [API\ServiceLines\Handbook::class, 'profiles']);

	$routes
		->domain('dev.1c-bitrix.ru')
		->middleware(['serviceLineDeterminant'])
		->where('serviceCode', '[a-zA-Z]')
		->group(function (RoutingConfigurator $routes) {
			//��������� �����
			$routes->get('/handbook/{serviceCode}/rulesForFields', [API\ServiceLines\Handbook::class, 'rulesForFields']);

			//�������� ������������ �����
			$routes->get('/handbook/{serviceCode}/enumFields', [API\ServiceLines\Handbook::class, 'enumFields']);
		});
});

// system part
$router = $routes->getRouter();
$router->releaseRoutes();
