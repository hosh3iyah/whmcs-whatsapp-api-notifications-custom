<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit839567ca51043b6ac6927d33818b4513
{
    public static $files = array (
        '72142d7b40a3a0b14e91825290b5ad82' => __DIR__ . '/..' . '/cakephp/core/functions.php',
        '948ad5488880985ff1c06721a4e447fe' => __DIR__ . '/..' . '/cakephp/utility/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'Lkn\\HookNotification\\' => 21,
        ),
        'C' => 
        array (
            'Cake\\Validation\\' => 16,
            'Cake\\Utility\\' => 13,
            'Cake\\Core\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Lkn\\HookNotification\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Cake\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/validation',
        ),
        'Cake\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/utility',
        ),
        'Cake\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/cakephp/core',
        ),
    );

    public static $classMap = array (
        'Cake\\Core\\App' => __DIR__ . '/..' . '/cakephp/core/App.php',
        'Cake\\Core\\BasePlugin' => __DIR__ . '/..' . '/cakephp/core/BasePlugin.php',
        'Cake\\Core\\ClassLoader' => __DIR__ . '/..' . '/cakephp/core/ClassLoader.php',
        'Cake\\Core\\Configure' => __DIR__ . '/..' . '/cakephp/core/Configure.php',
        'Cake\\Core\\Configure\\ConfigEngineInterface' => __DIR__ . '/..' . '/cakephp/core/Configure/ConfigEngineInterface.php',
        'Cake\\Core\\Configure\\Engine\\IniConfig' => __DIR__ . '/..' . '/cakephp/core/Configure/Engine/IniConfig.php',
        'Cake\\Core\\Configure\\Engine\\JsonConfig' => __DIR__ . '/..' . '/cakephp/core/Configure/Engine/JsonConfig.php',
        'Cake\\Core\\Configure\\Engine\\PhpConfig' => __DIR__ . '/..' . '/cakephp/core/Configure/Engine/PhpConfig.php',
        'Cake\\Core\\Configure\\FileConfigTrait' => __DIR__ . '/..' . '/cakephp/core/Configure/FileConfigTrait.php',
        'Cake\\Core\\ConsoleApplicationInterface' => __DIR__ . '/..' . '/cakephp/core/ConsoleApplicationInterface.php',
        'Cake\\Core\\Container' => __DIR__ . '/..' . '/cakephp/core/Container.php',
        'Cake\\Core\\ContainerApplicationInterface' => __DIR__ . '/..' . '/cakephp/core/ContainerApplicationInterface.php',
        'Cake\\Core\\ContainerInterface' => __DIR__ . '/..' . '/cakephp/core/ContainerInterface.php',
        'Cake\\Core\\ConventionsTrait' => __DIR__ . '/..' . '/cakephp/core/ConventionsTrait.php',
        'Cake\\Core\\Exception\\CakeException' => __DIR__ . '/..' . '/cakephp/core/Exception/CakeException.php',
        'Cake\\Core\\Exception\\MissingPluginException' => __DIR__ . '/..' . '/cakephp/core/Exception/MissingPluginException.php',
        'Cake\\Core\\HttpApplicationInterface' => __DIR__ . '/..' . '/cakephp/core/HttpApplicationInterface.php',
        'Cake\\Core\\InstanceConfigTrait' => __DIR__ . '/..' . '/cakephp/core/InstanceConfigTrait.php',
        'Cake\\Core\\ObjectRegistry' => __DIR__ . '/..' . '/cakephp/core/ObjectRegistry.php',
        'Cake\\Core\\Plugin' => __DIR__ . '/..' . '/cakephp/core/Plugin.php',
        'Cake\\Core\\PluginApplicationInterface' => __DIR__ . '/..' . '/cakephp/core/PluginApplicationInterface.php',
        'Cake\\Core\\PluginCollection' => __DIR__ . '/..' . '/cakephp/core/PluginCollection.php',
        'Cake\\Core\\PluginInterface' => __DIR__ . '/..' . '/cakephp/core/PluginInterface.php',
        'Cake\\Core\\Retry\\CommandRetry' => __DIR__ . '/..' . '/cakephp/core/Retry/CommandRetry.php',
        'Cake\\Core\\Retry\\RetryStrategyInterface' => __DIR__ . '/..' . '/cakephp/core/Retry/RetryStrategyInterface.php',
        'Cake\\Core\\ServiceConfig' => __DIR__ . '/..' . '/cakephp/core/ServiceConfig.php',
        'Cake\\Core\\ServiceProvider' => __DIR__ . '/..' . '/cakephp/core/ServiceProvider.php',
        'Cake\\Core\\StaticConfigTrait' => __DIR__ . '/..' . '/cakephp/core/StaticConfigTrait.php',
        'Cake\\Core\\TestSuite\\ContainerStubTrait' => __DIR__ . '/..' . '/cakephp/core/TestSuite/ContainerStubTrait.php',
        'Cake\\Utility\\CookieCryptTrait' => __DIR__ . '/..' . '/cakephp/utility/CookieCryptTrait.php',
        'Cake\\Utility\\Crypto\\OpenSsl' => __DIR__ . '/..' . '/cakephp/utility/Crypto/OpenSsl.php',
        'Cake\\Utility\\Exception\\XmlException' => __DIR__ . '/..' . '/cakephp/utility/Exception/XmlException.php',
        'Cake\\Utility\\Hash' => __DIR__ . '/..' . '/cakephp/utility/Hash.php',
        'Cake\\Utility\\Inflector' => __DIR__ . '/..' . '/cakephp/utility/Inflector.php',
        'Cake\\Utility\\MergeVariablesTrait' => __DIR__ . '/..' . '/cakephp/utility/MergeVariablesTrait.php',
        'Cake\\Utility\\Security' => __DIR__ . '/..' . '/cakephp/utility/Security.php',
        'Cake\\Utility\\Text' => __DIR__ . '/..' . '/cakephp/utility/Text.php',
        'Cake\\Utility\\Xml' => __DIR__ . '/..' . '/cakephp/utility/Xml.php',
        'Cake\\Validation\\RulesProvider' => __DIR__ . '/..' . '/cakephp/validation/RulesProvider.php',
        'Cake\\Validation\\ValidatableInterface' => __DIR__ . '/..' . '/cakephp/validation/ValidatableInterface.php',
        'Cake\\Validation\\Validation' => __DIR__ . '/..' . '/cakephp/validation/Validation.php',
        'Cake\\Validation\\ValidationRule' => __DIR__ . '/..' . '/cakephp/validation/ValidationRule.php',
        'Cake\\Validation\\ValidationSet' => __DIR__ . '/..' . '/cakephp/validation/ValidationSet.php',
        'Cake\\Validation\\Validator' => __DIR__ . '/..' . '/cakephp/validation/Validator.php',
        'Cake\\Validation\\ValidatorAwareInterface' => __DIR__ . '/..' . '/cakephp/validation/ValidatorAwareInterface.php',
        'Cake\\Validation\\ValidatorAwareTrait' => __DIR__ . '/..' . '/cakephp/validation/ValidatorAwareTrait.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Lkn\\HookNotification\\Config\\ChatwootChannels' => __DIR__ . '/../..' . '/src/Config/ChatwootChannels.php',
        'Lkn\\HookNotification\\Config\\Hooks' => __DIR__ . '/../..' . '/src/Config/Hooks.php',
        'Lkn\\HookNotification\\Config\\Platforms' => __DIR__ . '/../..' . '/src/Config/Platforms.php',
        'Lkn\\HookNotification\\Config\\Settings' => __DIR__ . '/../..' . '/src/Config/Settings.php',
        'Lkn\\HookNotification\\Custom\\HooksData\\Factories\\OrderFactory' => __DIR__ . '/../..' . '/src/Custom/HooksData/Factories/OrderFactory.php',
        'Lkn\\HookNotification\\Custom\\HooksData\\Order' => __DIR__ . '/../..' . '/src/Custom/HooksData/Order.php',
        'Lkn\\HookNotification\\Database\\DatabaseUpgrade' => __DIR__ . '/../..' . '/src/Database/DatabaseUpgrade.php',
        'Lkn\\HookNotification\\Database\\Entities\\ConfigsEntity' => __DIR__ . '/../..' . '/src/Database/Entities/ConfigsEntity.php',
        'Lkn\\HookNotification\\Dispatcher' => __DIR__ . '/../..' . '/src/Dispatcher.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Abstracts\\BaseController' => __DIR__ . '/../..' . '/src/Domains/Admin/Abstracts/BaseController.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Abstracts\\BaseRepository' => __DIR__ . '/../..' . '/src/Domains/Admin/Abstracts/BaseRepository.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Abstracts\\BaseRequestFactory' => __DIR__ . '/../..' . '/src/Domains/Admin/Abstracts/BaseRequestFactory.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Factories\\Requests\\Chatwoot\\UpdateIndexFactory' => __DIR__ . '/../..' . '/src/Domains/Admin/Factories/Requests/Chatwoot/UpdateIndexFactory.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Factories\\Requests\\UpdateModuleIndexFactory' => __DIR__ . '/../..' . '/src/Domains/Admin/Factories/Requests/UpdateModuleIndexFactory.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Factories\\Requests\\WhatsApp\\StoreAssocRequestFactory' => __DIR__ . '/../..' . '/src/Domains/Admin/Factories/Requests/WhatsApp/StoreAssocRequestFactory.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Factories\\Requests\\WhatsApp\\UpdateAssocRequestFactory' => __DIR__ . '/../..' . '/src/Domains/Admin/Factories/Requests/WhatsApp/UpdateAssocRequestFactory.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Factories\\Requests\\WhatsApp\\UpdateIndexFactory' => __DIR__ . '/../..' . '/src/Domains/Admin/Factories/Requests/WhatsApp/UpdateIndexFactory.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Hooks\\AdminInvoicesControlsOutput' => __DIR__ . '/../..' . '/src/Domains/Admin/Hooks/AdminInvoicesControlsOutput.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Controllers\\AdminController' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Controllers/AdminController.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Controllers\\ChatwootController' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Controllers/ChatwootController.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Controllers\\WhatsAppAssocController' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Controllers/WhatsAppAssocController.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Controllers\\WhatsAppController' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Controllers/WhatsAppController.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Requests\\Chatwoot\\UpdateIndexRequest' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Requests/Chatwoot/UpdateIndexRequest.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Requests\\UpdateModuleIndexRequest' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Requests/UpdateModuleIndexRequest.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Requests\\WhatsApp\\StoreAssocRequest' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Requests/WhatsApp/StoreAssocRequest.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Requests\\WhatsApp\\UpdateAssocRequest' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Requests/WhatsApp/UpdateAssocRequest.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Http\\Requests\\WhatsApp\\UpdateIndexRequest' => __DIR__ . '/../..' . '/src/Domains/Admin/Http/Requests/WhatsApp/UpdateIndexRequest.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Repositories\\ChatwootRepository' => __DIR__ . '/../..' . '/src/Domains/Admin/Repositories/ChatwootRepository.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Repositories\\ModuleRepository' => __DIR__ . '/../..' . '/src/Domains/Admin/Repositories/ModuleRepository.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Repositories\\WhatsAppApiRepository' => __DIR__ . '/../..' . '/src/Domains/Admin/Repositories/WhatsAppApiRepository.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Repositories\\WhatsAppAssocRepository' => __DIR__ . '/../..' . '/src/Domains/Admin/Repositories/WhatsAppAssocRepository.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Repositories\\WhatsAppRepository' => __DIR__ . '/../..' . '/src/Domains/Admin/Repositories/WhatsAppRepository.php',
        'Lkn\\HookNotification\\Domains\\Admin\\Router' => __DIR__ . '/../..' . '/src/Domains/Admin/Router.php',
        'Lkn\\HookNotification\\Domains\\Platform\\Abstracts\\HookDataParser' => __DIR__ . '/../..' . '/src/Domains/Platform/Abstracts/HookDataParser.php',
        'Lkn\\HookNotification\\Domains\\Platform\\HooksData\\Factories\\InvoiceReminderFactory' => __DIR__ . '/../..' . '/src/Domains/Platform/HooksData/Factories/InvoiceReminderFactory.php',
        'Lkn\\HookNotification\\Domains\\Platform\\HooksData\\Factories\\OrderCreatedFactory' => __DIR__ . '/../..' . '/src/Domains/Platform/HooksData/Factories/OrderCreatedFactory.php',
        'Lkn\\HookNotification\\Domains\\Platform\\HooksData\\Invoice' => __DIR__ . '/../..' . '/src/Domains/Platform/HooksData/Invoice.php',
        'Lkn\\HookNotification\\Domains\\Platform\\HooksData\\Order' => __DIR__ . '/../..' . '/src/Domains/Platform/HooksData/Order.php',
        'Lkn\\HookNotification\\Domains\\Platform\\Interfaces\\PlatformHookFileInterface' => __DIR__ . '/../..' . '/src/Domains/Platform/Interfaces/PlatformHookFileInterface.php',
        'Lkn\\HookNotification\\Domains\\Platform\\Traits\\HookDataGetter' => __DIR__ . '/../..' . '/src/Domains/Platform/Traits/HookDataGetter.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\Chatwoot\\Abstracts\\ChatwootApi' => __DIR__ . '/../..' . '/src/Domains/Platforms/Chatwoot/Abstracts/ChatwootApi.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\Chatwoot\\Abstracts\\ChatwootHookFile' => __DIR__ . '/../..' . '/src/Domains/Platforms/Chatwoot/Abstracts/ChatwootHookFile.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\WhatsApp\\Abstracts\\MessageTamplateParser' => __DIR__ . '/../..' . '/src/Domains/Platforms/WhatsApp/Abstracts/MessageTamplateParser.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\WhatsApp\\Abstracts\\WhatsappHookFile' => __DIR__ . '/../..' . '/src/Domains/Platforms/WhatsApp/Abstracts/WhatsappHookFile.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\WhatsApp\\Events\\ChatwootSendMessageAsPrivate' => __DIR__ . '/../..' . '/src/Domains/Platforms/WhatsApp/Events/ChatwootSendMessageAsPrivate.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\WhatsApp\\Hooks\\InvoiceReminder' => __DIR__ . '/../..' . '/src/Domains/Platforms/WhatsApp/Hooks/InvoiceReminder.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\WhatsApp\\Hooks\\InvoiceReminderPdf' => __DIR__ . '/../..' . '/src/Domains/Platforms/WhatsApp/Hooks/InvoiceReminderPdf.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\WhatsApp\\Hooks\\OrderCreated' => __DIR__ . '/../..' . '/src/Domains/Platforms/WhatsApp/Hooks/OrderCreated.php',
        'Lkn\\HookNotification\\Domains\\Platforms\\WhatsApp\\Interfaces\\WhatsappHookFileInterface' => __DIR__ . '/../..' . '/src/Domains/Platforms/WhatsApp/Interfaces/WhatsappHookFileInterface.php',
        'Lkn\\HookNotification\\Helpers\\Config' => __DIR__ . '/../..' . '/src/Helpers/Config.php',
        'Lkn\\HookNotification\\Helpers\\Formatter' => __DIR__ . '/../..' . '/src/Helpers/Formatter.php',
        'Lkn\\HookNotification\\Helpers\\License' => __DIR__ . '/../..' . '/src/Helpers/License.php',
        'Lkn\\HookNotification\\Helpers\\Link' => __DIR__ . '/../..' . '/src/Helpers/Link.php',
        'Lkn\\HookNotification\\Helpers\\Log' => __DIR__ . '/../..' . '/src/Helpers/Log.php',
        'Lkn\\HookNotification\\Helpers\\Response' => __DIR__ . '/../..' . '/src/Helpers/Response.php',
        'Lkn\\HookNotification\\Helpers\\VersionUpgrade' => __DIR__ . '/../..' . '/src/Helpers/VersionUpgrade.php',
        'Lkn\\HookNotification\\Helpers\\View' => __DIR__ . '/../..' . '/src/Helpers/View.php',
        'Lkn\\HookNotification\\Policies\\DoesExceedMaxHooksOnFreePlanPolicy' => __DIR__ . '/../..' . '/src/Policies/DoesExceedMaxHooksOnFreePlanPolicy.php',
        'Lkn\\HookNotification\\Policies\\ReachedMaxMsgTemplateAssocs' => __DIR__ . '/../..' . '/src/Policies/ReachedMaxMsgTemplateAssocs.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit839567ca51043b6ac6927d33818b4513::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit839567ca51043b6ac6927d33818b4513::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit839567ca51043b6ac6927d33818b4513::$classMap;

        }, null, ClassLoader::class);
    }
}