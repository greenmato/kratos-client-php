# # SettingsFlow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **string** | Active, if set, contains the registration method that is being used. It is initially not set. | [optional]
**expires_at** | **\DateTime** | ExpiresAt is the time (UTC) when the flow expires. If the user still wishes to update the setting, a new flow has to be initiated. |
**id** | **string** |  |
**identity** | [**\OpenAPI\Client\Model\Identity**](Identity.md) |  |
**issued_at** | **\DateTime** | IssuedAt is the time (UTC) when the flow occurred. |
**messages** | [**\OpenAPI\Client\Model\UiText[]**](UiText.md) |  | [optional]
**methods** | [**array<string,\OpenAPI\Client\Model\SettingsFlowMethod>**](SettingsFlowMethod.md) | Methods contains context for all enabled registration methods. If a settings flow has been processed, but for example the first name is empty, this will contain error messages. |
**request_url** | **string** | RequestURL is the initial URL that was requested from Ory Kratos. It can be used to forward information contained in the URL&#39;s path or query for example. |
**state** | **string** |  |
**type** | **string** | The flow type can either be &#x60;api&#x60; or &#x60;browser&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
