# # RecoveryFlow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **string** | Active, if set, contains the registration method that is being used. It is initially not set. | [optional]
**expires_at** | **\DateTime** | ExpiresAt is the time (UTC) when the request expires. If the user still wishes to update the setting, a new request has to be initiated. |
**id** | **string** |  |
**issued_at** | **\DateTime** | IssuedAt is the time (UTC) when the request occurred. |
**messages** | [**\OpenAPI\Client\Model\UiText[]**](UiText.md) |  | [optional]
**methods** | [**array<string,\OpenAPI\Client\Model\RecoveryFlowMethod>**](RecoveryFlowMethod.md) | Methods contains context for all account recovery methods. If a registration request has been processed, but for example the password is incorrect, this will contain error messages. |
**request_url** | **string** | RequestURL is the initial URL that was requested from Ory Kratos. It can be used to forward information contained in the URL&#39;s path or query for example. |
**state** | **string** |  |
**type** | **string** | The flow type can either be &#x60;api&#x60; or &#x60;browser&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
