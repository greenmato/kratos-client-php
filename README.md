# OpenAPIClient-php

Documentation for all public and administrative Ory Kratos APIs. Public and administrative APIs
are exposed on different ports. Public APIs can face the public internet without any protection
while administrative APIs should never be exposed without prior authorization. To protect
the administative API port you should use something like Nginx, Ory Oathkeeper, or any other
technology capable of authorizing incoming requests.



## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_identity = new \OpenAPI\Client\Model\CreateIdentity(); // \OpenAPI\Client\Model\CreateIdentity

try {
    $result = $apiInstance->createIdentity($create_identity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->createIdentity: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://demo.tenants.oryapis.com/api/kratos/public*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**createIdentity**](docs/Api/AdminApi.md#createidentity) | **POST** /identities | Create an Identity
*AdminApi* | [**createRecoveryLink**](docs/Api/AdminApi.md#createrecoverylink) | **POST** /recovery/link | Create a Recovery Link
*AdminApi* | [**deleteIdentity**](docs/Api/AdminApi.md#deleteidentity) | **DELETE** /identities/{id} | Delete an Identity
*AdminApi* | [**getIdentity**](docs/Api/AdminApi.md#getidentity) | **GET** /identities/{id} | Get an Identity
*AdminApi* | [**getSchema**](docs/Api/AdminApi.md#getschema) | **GET** /schemas/{id} | 
*AdminApi* | [**getSelfServiceError**](docs/Api/AdminApi.md#getselfserviceerror) | **GET** /self-service/errors | Get User-Facing Self-Service Errors
*AdminApi* | [**getSelfServiceLoginFlow**](docs/Api/AdminApi.md#getselfserviceloginflow) | **GET** /self-service/login/flows | Get Login Flow
*AdminApi* | [**getSelfServiceRecoveryFlow**](docs/Api/AdminApi.md#getselfservicerecoveryflow) | **GET** /self-service/recovery/flows | Get information about a recovery flow
*AdminApi* | [**getSelfServiceRegistrationFlow**](docs/Api/AdminApi.md#getselfserviceregistrationflow) | **GET** /self-service/registration/flows | Get Registration Flow
*AdminApi* | [**getSelfServiceSettingsFlow**](docs/Api/AdminApi.md#getselfservicesettingsflow) | **GET** /self-service/settings/flows | Get Settings Flow
*AdminApi* | [**getSelfServiceVerificationFlow**](docs/Api/AdminApi.md#getselfserviceverificationflow) | **GET** /self-service/verification/flows | Get Verification Flow
*AdminApi* | [**getVersion**](docs/Api/AdminApi.md#getversion) | **GET** /version | Return Running Software Version.
*AdminApi* | [**isAlive**](docs/Api/AdminApi.md#isalive) | **GET** /health/alive | Check HTTP Server Status
*AdminApi* | [**isReady**](docs/Api/AdminApi.md#isready) | **GET** /health/ready | Check HTTP Server and Database Status
*AdminApi* | [**listIdentities**](docs/Api/AdminApi.md#listidentities) | **GET** /identities | List Identities
*AdminApi* | [**prometheus**](docs/Api/AdminApi.md#prometheus) | **GET** /metrics/prometheus | Get snapshot metrics from the Kratos service. If you&#39;re using k8s, you can then add annotations to your deployment like so:
*AdminApi* | [**updateIdentity**](docs/Api/AdminApi.md#updateidentity) | **PUT** /identities/{id} | Update an Identity
*PublicApi* | [**completeSelfServiceBrowserSettingsOIDCSettingsFlow**](docs/Api/PublicApi.md#completeselfservicebrowsersettingsoidcsettingsflow) | **POST** /self-service/browser/flows/registration/strategies/oidc/settings/connections | Complete the Browser-Based Settings Flow for the OpenID Connect Strategy
*PublicApi* | [**completeSelfServiceLoginFlowWithPasswordMethod**](docs/Api/PublicApi.md#completeselfserviceloginflowwithpasswordmethod) | **POST** /self-service/login/methods/password | Complete Login Flow with Username/Email Password Method
*PublicApi* | [**completeSelfServiceRecoveryFlowWithLinkMethod**](docs/Api/PublicApi.md#completeselfservicerecoveryflowwithlinkmethod) | **POST** /self-service/recovery/methods/link | Complete Recovery Flow with Link Method
*PublicApi* | [**completeSelfServiceRegistrationFlowWithPasswordMethod**](docs/Api/PublicApi.md#completeselfserviceregistrationflowwithpasswordmethod) | **POST** /self-service/registration/methods/password | Complete Registration Flow with Username/Email Password Method
*PublicApi* | [**completeSelfServiceSettingsFlowWithPasswordMethod**](docs/Api/PublicApi.md#completeselfservicesettingsflowwithpasswordmethod) | **POST** /self-service/settings/methods/password | Complete Settings Flow with Username/Email Password Method
*PublicApi* | [**completeSelfServiceSettingsFlowWithProfileMethod**](docs/Api/PublicApi.md#completeselfservicesettingsflowwithprofilemethod) | **POST** /self-service/settings/methods/profile | Complete Settings Flow with Profile Method
*PublicApi* | [**completeSelfServiceVerificationFlowWithLinkMethod**](docs/Api/PublicApi.md#completeselfserviceverificationflowwithlinkmethod) | **POST** /self-service/verification/methods/link | Complete Verification Flow with Link Method
*PublicApi* | [**getSchema**](docs/Api/PublicApi.md#getschema) | **GET** /schemas/{id} | 
*PublicApi* | [**getSelfServiceError**](docs/Api/PublicApi.md#getselfserviceerror) | **GET** /self-service/errors | Get User-Facing Self-Service Errors
*PublicApi* | [**getSelfServiceLoginFlow**](docs/Api/PublicApi.md#getselfserviceloginflow) | **GET** /self-service/login/flows | Get Login Flow
*PublicApi* | [**getSelfServiceRecoveryFlow**](docs/Api/PublicApi.md#getselfservicerecoveryflow) | **GET** /self-service/recovery/flows | Get information about a recovery flow
*PublicApi* | [**getSelfServiceRegistrationFlow**](docs/Api/PublicApi.md#getselfserviceregistrationflow) | **GET** /self-service/registration/flows | Get Registration Flow
*PublicApi* | [**getSelfServiceSettingsFlow**](docs/Api/PublicApi.md#getselfservicesettingsflow) | **GET** /self-service/settings/flows | Get Settings Flow
*PublicApi* | [**getSelfServiceVerificationFlow**](docs/Api/PublicApi.md#getselfserviceverificationflow) | **GET** /self-service/verification/flows | Get Verification Flow
*PublicApi* | [**initializeSelfServiceBrowserLogoutFlow**](docs/Api/PublicApi.md#initializeselfservicebrowserlogoutflow) | **GET** /self-service/browser/flows/logout | Initialize Browser-Based Logout User Flow
*PublicApi* | [**initializeSelfServiceLoginViaAPIFlow**](docs/Api/PublicApi.md#initializeselfserviceloginviaapiflow) | **GET** /self-service/login/api | Initialize Login Flow for API clients
*PublicApi* | [**initializeSelfServiceLoginViaBrowserFlow**](docs/Api/PublicApi.md#initializeselfserviceloginviabrowserflow) | **GET** /self-service/login/browser | Initialize Login Flow for browsers
*PublicApi* | [**initializeSelfServiceRecoveryViaAPIFlow**](docs/Api/PublicApi.md#initializeselfservicerecoveryviaapiflow) | **GET** /self-service/recovery/api | Initialize Recovery Flow for API Clients
*PublicApi* | [**initializeSelfServiceRecoveryViaBrowserFlow**](docs/Api/PublicApi.md#initializeselfservicerecoveryviabrowserflow) | **GET** /self-service/recovery/browser | Initialize Recovery Flow for Browser Clients
*PublicApi* | [**initializeSelfServiceRegistrationViaAPIFlow**](docs/Api/PublicApi.md#initializeselfserviceregistrationviaapiflow) | **GET** /self-service/registration/api | Initialize Registration Flow for API clients
*PublicApi* | [**initializeSelfServiceRegistrationViaBrowserFlow**](docs/Api/PublicApi.md#initializeselfserviceregistrationviabrowserflow) | **GET** /self-service/registration/browser | Initialize Registration Flow for browsers
*PublicApi* | [**initializeSelfServiceSettingsViaAPIFlow**](docs/Api/PublicApi.md#initializeselfservicesettingsviaapiflow) | **GET** /self-service/settings/api | Initialize Settings Flow for API Clients
*PublicApi* | [**initializeSelfServiceSettingsViaBrowserFlow**](docs/Api/PublicApi.md#initializeselfservicesettingsviabrowserflow) | **GET** /self-service/settings/browser | Initialize Settings Flow for Browsers
*PublicApi* | [**initializeSelfServiceVerificationViaAPIFlow**](docs/Api/PublicApi.md#initializeselfserviceverificationviaapiflow) | **GET** /self-service/verification/api | Initialize Verification Flow for API Clients
*PublicApi* | [**initializeSelfServiceVerificationViaBrowserFlow**](docs/Api/PublicApi.md#initializeselfserviceverificationviabrowserflow) | **GET** /self-service/verification/browser | Initialize Verification Flow for Browser Clients
*PublicApi* | [**revokeSession**](docs/Api/PublicApi.md#revokesession) | **DELETE** /sessions | Revoke and Invalidate a Session
*PublicApi* | [**whoami**](docs/Api/PublicApi.md#whoami) | **GET** /sessions/whoami | Check Who the Current HTTP Session Belongs To

## Models

- [CompleteSelfServiceBrowserSettingsOIDCFlowPayload](docs/Model/CompleteSelfServiceBrowserSettingsOIDCFlowPayload.md)
- [CompleteSelfServiceBrowserSettingsProfileStrategyFlow](docs/Model/CompleteSelfServiceBrowserSettingsProfileStrategyFlow.md)
- [CompleteSelfServiceLoginFlowWithPasswordMethod](docs/Model/CompleteSelfServiceLoginFlowWithPasswordMethod.md)
- [CompleteSelfServiceRecoveryFlowWithLinkMethod](docs/Model/CompleteSelfServiceRecoveryFlowWithLinkMethod.md)
- [CompleteSelfServiceSettingsFlowWithPasswordMethod](docs/Model/CompleteSelfServiceSettingsFlowWithPasswordMethod.md)
- [CompleteSelfServiceVerificationFlowWithLinkMethod](docs/Model/CompleteSelfServiceVerificationFlowWithLinkMethod.md)
- [CreateIdentity](docs/Model/CreateIdentity.md)
- [CreateRecoveryLink](docs/Model/CreateRecoveryLink.md)
- [ErrorContainer](docs/Model/ErrorContainer.md)
- [Form](docs/Model/Form.md)
- [GenericError](docs/Model/GenericError.md)
- [GenericErrorPayload](docs/Model/GenericErrorPayload.md)
- [HealthNotReadyStatus](docs/Model/HealthNotReadyStatus.md)
- [HealthStatus](docs/Model/HealthStatus.md)
- [Identity](docs/Model/Identity.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse503](docs/Model/InlineResponse503.md)
- [LoginFlow](docs/Model/LoginFlow.md)
- [LoginFlowMethod](docs/Model/LoginFlowMethod.md)
- [LoginFlowMethodConfig](docs/Model/LoginFlowMethodConfig.md)
- [LoginFlowMethodConfigPayload](docs/Model/LoginFlowMethodConfigPayload.md)
- [LoginViaApiResponse](docs/Model/LoginViaApiResponse.md)
- [RecoveryAddress](docs/Model/RecoveryAddress.md)
- [RecoveryFlow](docs/Model/RecoveryFlow.md)
- [RecoveryFlowMethod](docs/Model/RecoveryFlowMethod.md)
- [RecoveryFlowMethodConfig](docs/Model/RecoveryFlowMethodConfig.md)
- [RecoveryFlowMethodConfigPayload](docs/Model/RecoveryFlowMethodConfigPayload.md)
- [RecoveryLink](docs/Model/RecoveryLink.md)
- [RegistrationFlow](docs/Model/RegistrationFlow.md)
- [RegistrationFlowMethod](docs/Model/RegistrationFlowMethod.md)
- [RegistrationFlowMethodConfig](docs/Model/RegistrationFlowMethodConfig.md)
- [RegistrationFlowMethodConfigPayload](docs/Model/RegistrationFlowMethodConfigPayload.md)
- [RegistrationViaApiResponse](docs/Model/RegistrationViaApiResponse.md)
- [RevokeSession](docs/Model/RevokeSession.md)
- [Session](docs/Model/Session.md)
- [SettingsFlow](docs/Model/SettingsFlow.md)
- [SettingsFlowMethod](docs/Model/SettingsFlowMethod.md)
- [SettingsFlowMethodConfig](docs/Model/SettingsFlowMethodConfig.md)
- [SettingsFlowMethodConfigPayload](docs/Model/SettingsFlowMethodConfigPayload.md)
- [SettingsProfileFormConfig](docs/Model/SettingsProfileFormConfig.md)
- [SettingsViaApiResponse](docs/Model/SettingsViaApiResponse.md)
- [UiNode](docs/Model/UiNode.md)
- [UiNodeAnchorAttributes](docs/Model/UiNodeAnchorAttributes.md)
- [UiNodeAttributes](docs/Model/UiNodeAttributes.md)
- [UiNodeImageAttributes](docs/Model/UiNodeImageAttributes.md)
- [UiNodeInputAttributes](docs/Model/UiNodeInputAttributes.md)
- [UiNodeTextAttributes](docs/Model/UiNodeTextAttributes.md)
- [UiText](docs/Model/UiText.md)
- [UpdateIdentity](docs/Model/UpdateIdentity.md)
- [VerifiableAddress](docs/Model/VerifiableAddress.md)
- [VerificationFlow](docs/Model/VerificationFlow.md)
- [VerificationFlowMethod](docs/Model/VerificationFlowMethod.md)
- [VerificationFlowMethodConfig](docs/Model/VerificationFlowMethodConfig.md)
- [VerificationFlowMethodConfigPayload](docs/Model/VerificationFlowMethodConfigPayload.md)
- [Version](docs/Model/Version.md)

## Authorization

### sessionCookie

- **Type**: API key
- **API key parameter name**: ory_kratos_session
- **Location**: 



### sessionToken

- **Type**: API key
- **API key parameter name**: X-Session-Token
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hi@ory.sh

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: ``
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
