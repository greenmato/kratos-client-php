# # LoginFlow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **string** | and so on. | [optional]
**expires_at** | **\DateTime** | ExpiresAt is the time (UTC) when the flow expires. If the user still wishes to log in, a new flow has to be initiated. |
**forced** | **bool** | Forced stores whether this login flow should enforce re-authentication. | [optional]
**id** | **string** |  |
**issued_at** | **\DateTime** | IssuedAt is the time (UTC) when the flow started. |
**messages** | [**\OpenAPI\Client\Model\UiText[]**](UiText.md) |  | [optional]
**methods** | [**array<string,\OpenAPI\Client\Model\LoginFlowMethod>**](LoginFlowMethod.md) | List of login methods  This is the list of available login methods with their required form fields, such as &#x60;identifier&#x60; and &#x60;password&#x60; for the password login method. This will also contain error messages such as \&quot;password can not be empty\&quot;. |
**request_url** | **string** | RequestURL is the initial URL that was requested from Ory Kratos. It can be used to forward information contained in the URL&#39;s path or query for example. |
**type** | **string** | The flow type can either be &#x60;api&#x60; or &#x60;browser&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
