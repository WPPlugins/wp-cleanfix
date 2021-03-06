<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff7b0d7436a490eaf81567088d27f9dc
{
    public static $files = array (
        '62b15e16680c158ea02516f33e41c943' => __DIR__ . '/..' . '/wpbones/wpbones/src/helpers.php',
        '514cc4fdade02a2a8e68f45e5d3b87e5' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPCleanFix\\WPBones\\' => 19,
            'WPCleanFix\\PureCSSTabs\\' => 23,
            'WPCleanFix\\PureCSSSwitch\\' => 25,
            'WPCleanFix\\ActionsAndFiltersJS\\' => 31,
            'WPCleanFix\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPCleanFix\\WPBones\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/wpbones/src',
        ),
        'WPCleanFix\\PureCSSTabs\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/pure-css-tabs/src',
        ),
        'WPCleanFix\\PureCSSSwitch\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/pure-css-switch/src',
        ),
        'WPCleanFix\\ActionsAndFiltersJS\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpbones/actions-and-filters-js/src',
        ),
        'WPCleanFix\\' => 
        array (
            0 => __DIR__ . '/../..' . '/plugin',
        ),
    );

    public static $classMap = array (
        'WPCleanFix\\ActionsAndFiltersJS\\ActionsAndFiltersJSProvider' => __DIR__ . '/..' . '/wpbones/actions-and-filters-js/src/ActionsAndFiltersJSProvider.php',
        'WPCleanFix\\Ajax\\WPCleanFixAjax' => __DIR__ . '/../..' . '/plugin/Ajax/WPCleanFixAjax.php',
        'WPCleanFix\\Http\\Controllers\\Controller' => __DIR__ . '/../..' . '/plugin/Http/Controllers/Controller.php',
        'WPCleanFix\\Http\\Controllers\\DashboardController' => __DIR__ . '/../..' . '/plugin/Http/Controllers/DashboardController.php',
        'WPCleanFix\\Http\\Controllers\\SettingsController' => __DIR__ . '/../..' . '/plugin/Http/Controllers/SettingsController.php',
        'WPCleanFix\\Http\\Controllers\\ToolsController' => __DIR__ . '/../..' . '/plugin/Http/Controllers/ToolsController.php',
        'WPCleanFix\\Modules\\Comments\\CommentsModule' => __DIR__ . '/../..' . '/plugin/Modules/Comments/CommentsModule.php',
        'WPCleanFix\\Modules\\Comments\\SpamTest' => __DIR__ . '/../..' . '/plugin/Modules/Comments/SpamTest.php',
        'WPCleanFix\\Modules\\Comments\\TrashTest' => __DIR__ . '/../..' . '/plugin/Modules/Comments/TrashTest.php',
        'WPCleanFix\\Modules\\Comments\\UnapprovedTest' => __DIR__ . '/../..' . '/plugin/Modules/Comments/UnapprovedTest.php',
        'WPCleanFix\\Modules\\Database\\DatabaseModule' => __DIR__ . '/../..' . '/plugin/Modules/Database/DatabaseModule.php',
        'WPCleanFix\\Modules\\Database\\DatabaseTablesTest' => __DIR__ . '/../..' . '/plugin/Modules/Database/DatabaseTablesTest.php',
        'WPCleanFix\\Modules\\Module' => __DIR__ . '/../..' . '/plugin/Modules/Module.php',
        'WPCleanFix\\Modules\\Options\\ExpiredSiteTransientTest' => __DIR__ . '/../..' . '/plugin/Modules/Options/ExpiredSiteTransientTest.php',
        'WPCleanFix\\Modules\\Options\\ExpiredTransientsTest' => __DIR__ . '/../..' . '/plugin/Modules/Options/ExpiredTransientTest.php',
        'WPCleanFix\\Modules\\Options\\OptionsModule' => __DIR__ . '/../..' . '/plugin/Modules/Options/OptionsModule.php',
        'WPCleanFix\\Modules\\Posts\\AutodraftTest' => __DIR__ . '/../..' . '/plugin/Modules/Posts/AutodraftTest.php',
        'WPCleanFix\\Modules\\Posts\\OrphanAttachmentsTest' => __DIR__ . '/../..' . '/plugin/Modules/Posts/OrphanAttachmentsTest.php',
        'WPCleanFix\\Modules\\Posts\\OrphanPostMetaTest' => __DIR__ . '/../..' . '/plugin/Modules/Posts/OrphanPostMetaTest.php',
        'WPCleanFix\\Modules\\Posts\\OrphanPostTypesTest' => __DIR__ . '/../..' . '/plugin/Modules/Posts/OrphanPostTypesTest.php',
        'WPCleanFix\\Modules\\Posts\\PostsModule' => __DIR__ . '/../..' . '/plugin/Modules/Posts/PostsModule.php',
        'WPCleanFix\\Modules\\Posts\\PostsWithoutUserTest' => __DIR__ . '/../..' . '/plugin/Modules/Posts/PostsWithoutUserTest.php',
        'WPCleanFix\\Modules\\Posts\\RevisionsTest' => __DIR__ . '/../..' . '/plugin/Modules/Posts/RevisionsTest.php',
        'WPCleanFix\\Modules\\Posts\\TemporaryTest' => __DIR__ . '/../..' . '/plugin/Modules/Posts/TemporaryTest.php',
        'WPCleanFix\\Modules\\Posts\\TrashTest' => __DIR__ . '/../..' . '/plugin/Modules/Posts/TrashTest.php',
        'WPCleanFix\\Modules\\Taxonomies\\ConsistentTermsRelationshipsTest' => __DIR__ . '/../..' . '/plugin/Modules/Taxonomies/ConsistentTermsRelationshipsTest.php',
        'WPCleanFix\\Modules\\Taxonomies\\ConsistentTermsTaxonomiesTest' => __DIR__ . '/../..' . '/plugin/Modules/Taxonomies/ConsistentTermsTaxonomiesTest.php',
        'WPCleanFix\\Modules\\Taxonomies\\ConsistentTermsTest' => __DIR__ . '/../..' . '/plugin/Modules/Taxonomies/ConsistentTermsTest.php',
        'WPCleanFix\\Modules\\Taxonomies\\OrphanPostCategoriesTest' => __DIR__ . '/../..' . '/plugin/Modules/Taxonomies/OrphanPostCategoriesTest.php',
        'WPCleanFix\\Modules\\Taxonomies\\OrphanPostTagsTest' => __DIR__ . '/../..' . '/plugin/Modules/Taxonomies/OrphanPostTagsTest.php',
        'WPCleanFix\\Modules\\Taxonomies\\OrphanTermsTest' => __DIR__ . '/../..' . '/plugin/Modules/Taxonomies/OrphanTermsTest.php',
        'WPCleanFix\\Modules\\Taxonomies\\TaxonomiesModule' => __DIR__ . '/../..' . '/plugin/Modules/Taxonomies/TaxonomiesModule.php',
        'WPCleanFix\\Modules\\Test' => __DIR__ . '/../..' . '/plugin/Modules/Test.php',
        'WPCleanFix\\Modules\\Users\\OrphanUserMetaTest' => __DIR__ . '/../..' . '/plugin/Modules/Users/OrphanUserMetaTest.php',
        'WPCleanFix\\Modules\\Users\\UsersModule' => __DIR__ . '/../..' . '/plugin/Modules/Users/UsersModule.php',
        'WPCleanFix\\Providers\\WPCleanFixModulesProviders' => __DIR__ . '/../..' . '/plugin/Providers/WPCleanFixModulesProviders.php',
        'WPCleanFix\\PureCSSSwitch\\Html\\HtmlTagSwitchButton' => __DIR__ . '/..' . '/wpbones/pure-css-switch/src/Html/HtmlTagSwitchButton.php',
        'WPCleanFix\\PureCSSSwitch\\PureCSSSwitchProvider' => __DIR__ . '/..' . '/wpbones/pure-css-switch/src/PureCSSSwitchProvider.php',
        'WPCleanFix\\PureCSSTabs\\PureCSSTabsProvider' => __DIR__ . '/..' . '/wpbones/pure-css-tabs/src/PureCSSTabsProvider.php',
        'WPCleanFix\\Tools\\Comments' => __DIR__ . '/../..' . '/plugin/Tools/Comments.php',
        'WPCleanFix\\Tools\\Database' => __DIR__ . '/../..' . '/plugin/Tools/Database.php',
        'WPCleanFix\\Tools\\Postmeta' => __DIR__ . '/../..' . '/plugin/Tools/Postmeta.php',
        'WPCleanFix\\Tools\\Posts' => __DIR__ . '/../..' . '/plugin/Tools/Posts.php',
        'WPCleanFix\\WPBones\\Console\\Command' => __DIR__ . '/..' . '/wpbones/wpbones/src/Console/Command.php',
        'WPCleanFix\\WPBones\\Container\\Container' => __DIR__ . '/..' . '/wpbones/wpbones/src/Container/Container.php',
        'WPCleanFix\\WPBones\\Contracts\\Container\\Container' => __DIR__ . '/..' . '/wpbones/wpbones/src/Contracts/Container/Container.php',
        'WPCleanFix\\WPBones\\Contracts\\Foundation\\Plugin' => __DIR__ . '/..' . '/wpbones/wpbones/src/Contracts/Foundation/Plugin.php',
        'WPCleanFix\\WPBones\\Database\\Migrations\\Migration' => __DIR__ . '/..' . '/wpbones/wpbones/src/Database/Migrations/Migration.php',
        'WPCleanFix\\WPBones\\Database\\Seeder' => __DIR__ . '/..' . '/wpbones/wpbones/src/Database/Seeder.php',
        'WPCleanFix\\WPBones\\Database\\WordPressOption' => __DIR__ . '/..' . '/wpbones/wpbones/src/Database/WordPressOption.php',
        'WPCleanFix\\WPBones\\Foundation\\Console\\Kernel' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/Console/Kernel.php',
        'WPCleanFix\\WPBones\\Foundation\\Http\\Request' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/Http/Request.php',
        'WPCleanFix\\WPBones\\Foundation\\Plugin' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/Plugin.php',
        'WPCleanFix\\WPBones\\Foundation\\WordPressAjaxServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/WordPressAjaxServiceProvider.php',
        'WPCleanFix\\WPBones\\Foundation\\WordPressCustomPostTypeServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/WordPressCustomPostTypeServiceProvider.php',
        'WPCleanFix\\WPBones\\Foundation\\WordPressCustomTaxonomyTypeServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/WordPressCustomTaxonomyTypeServiceProvider.php',
        'WPCleanFix\\WPBones\\Foundation\\WordPressShortcodesServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Foundation/WordPressShortcodesServiceProvider.php',
        'WPCleanFix\\WPBones\\Html\\Html' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/Html.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTag' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTag.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagA' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagA.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagButton' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagButton.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagCheckbox' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagCheckbox.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagDatetime' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagDatetime.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagFieldSet' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagFieldSet.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagForm' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagForm.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagInput' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagInput.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagLabel' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagLabel.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagOptGroup' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagOptGroup.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagOption' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagOption.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagSelect' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagSelect.php',
        'WPCleanFix\\WPBones\\Html\\HtmlTagTextArea' => __DIR__ . '/..' . '/wpbones/wpbones/src/Html/HtmlTagTextArea.php',
        'WPCleanFix\\WPBones\\Routing\\Controller' => __DIR__ . '/..' . '/wpbones/wpbones/src/Routing/Controller.php',
        'WPCleanFix\\WPBones\\Routing\\Route' => __DIR__ . '/..' . '/wpbones/wpbones/src/Routing/Route.php',
        'WPCleanFix\\WPBones\\Support\\ServiceProvider' => __DIR__ . '/..' . '/wpbones/wpbones/src/Support/ServiceProvider.php',
        'WPCleanFix\\WPBones\\Support\\Str' => __DIR__ . '/..' . '/wpbones/wpbones/src/Support/Str.php',
        'WPCleanFix\\WPBones\\Support\\Widget' => __DIR__ . '/..' . '/wpbones/wpbones/src/Support/Widget.php',
        'WPCleanFix\\WPBones\\View\\View' => __DIR__ . '/..' . '/wpbones/wpbones/src/View/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff7b0d7436a490eaf81567088d27f9dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff7b0d7436a490eaf81567088d27f9dc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff7b0d7436a490eaf81567088d27f9dc::$classMap;

        }, null, ClassLoader::class);
    }
}
