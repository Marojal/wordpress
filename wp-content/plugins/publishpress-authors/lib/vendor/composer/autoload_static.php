<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitPPAuthors
{
    public static $files = array (
        '3b1e1688e889525de91ac2456aba9efd' => __DIR__ . '/..' . '/publishpress/psr-container/lib/include.php',
        '24b27b1b9a32bf58eda571c3e5ae3480' => __DIR__ . '/..' . '/publishpress/pimple-pimple/lib/include.php',
        '0078757fbd019a5f202f2be6585c3626' => __DIR__ . '/..' . '/publishpress/wordpress-banners/BannersMain.php',
        '41c664bd04a95c2d6a2f2a3e00f06593' => __DIR__ . '/..' . '/publishpress/wordpress-reviews/ReviewsController.php',
        'a61bc28a742b9f9f2fd5ef4d2d1e2037' => __DIR__ . '/..' . '/publishpress/wordpress-version-notices/src/include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PPAuthors\\YoastSEO\\' => 19,
        ),
        'M' => 
        array (
            'MultipleAuthors\\' => 16,
            'MultipleAuthorList\\' => 19,
            'MultipleAuthorCategories\\' => 25,
            'MultipleAuthorBoxes\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PPAuthors\\YoastSEO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../src/modules/yoast-seo-integration/src',
        ),
        'MultipleAuthors\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../src/core',
        ),
        'MultipleAuthorList\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../src/modules/author-list/classes',
        ),
        'MultipleAuthorCategories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../src/modules/author-categories/classes',
        ),
        'MultipleAuthorBoxes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../src/modules/author-boxes/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MultipleAuthorBoxes\\AuthorBoxesAjax' => __DIR__ . '/../..' . '/../src/modules/author-boxes/classes/AuthorBoxesAjax.php',
        'MultipleAuthorBoxes\\AuthorBoxesDefault' => __DIR__ . '/../..' . '/../src/modules/author-boxes/classes/AuthorBoxesDefault.php',
        'MultipleAuthorBoxes\\AuthorBoxesEditorFields' => __DIR__ . '/../..' . '/../src/modules/author-boxes/classes/AuthorBoxesEditorFields.php',
        'MultipleAuthorBoxes\\AuthorBoxesStyles' => __DIR__ . '/../..' . '/../src/modules/author-boxes/classes/AuthorBoxesStyles.php',
        'MultipleAuthorCategories\\AuthorCategoriesSchema' => __DIR__ . '/../..' . '/../src/modules/author-categories/classes/AuthorCategoriesSchema.php',
        'MultipleAuthorCategories\\AuthorCategoriesTable' => __DIR__ . '/../..' . '/../src/modules/author-categories/classes/AuthorCategoriesTable.php',
        'MultipleAuthorList\\AuthorListTable' => __DIR__ . '/../..' . '/../src/modules/author-list/classes/AuthorListTable.php',
        'MultipleAuthors\\Authors_Widget' => __DIR__ . '/../..' . '/../src/core/Authors_Widget.php',
        'MultipleAuthors\\Capability' => __DIR__ . '/../..' . '/../src/core/Capability.php',
        'MultipleAuthors\\Classes\\Admin_Ajax' => __DIR__ . '/../..' . '/../src/core/Classes/Admin_Ajax.php',
        'MultipleAuthors\\Classes\\Author_Editor' => __DIR__ . '/../..' . '/../src/core/Classes/Author_Editor.php',
        'MultipleAuthors\\Classes\\Author_Utils' => __DIR__ . '/../..' . '/../src/core/Classes/Author_Utils.php',
        'MultipleAuthors\\Classes\\Authors_Iterator' => __DIR__ . '/../..' . '/../src/core/Classes/Authors_Iterator.php',
        'MultipleAuthors\\Classes\\CLI' => __DIR__ . '/../..' . '/../src/core/Classes/CLI.php',
        'MultipleAuthors\\Classes\\Content_Model' => __DIR__ . '/../..' . '/../src/core/Classes/Content_Model.php',
        'MultipleAuthors\\Classes\\Installer' => __DIR__ . '/../..' . '/../src/core/Classes/Installer.php',
        'MultipleAuthors\\Classes\\Integrations\\Theme' => __DIR__ . '/../..' . '/../src/core/Classes/Integrations/Theme.php',
        'MultipleAuthors\\Classes\\Legacy\\LegacyPlugin' => __DIR__ . '/../..' . '/../src/core/Classes/Legacy/LegacyPlugin.php',
        'MultipleAuthors\\Classes\\Legacy\\Module' => __DIR__ . '/../..' . '/../src/core/Classes/Legacy/Module.php',
        'MultipleAuthors\\Classes\\Legacy\\Util' => __DIR__ . '/../..' . '/../src/core/Classes/Legacy/Util.php',
        'MultipleAuthors\\Classes\\Objects\\Author' => __DIR__ . '/../..' . '/../src/core/Classes/Objects/Author.php',
        'MultipleAuthors\\Classes\\Objects\\Post' => __DIR__ . '/../..' . '/../src/core/Classes/Objects/Post.php',
        'MultipleAuthors\\Classes\\Post_Editor' => __DIR__ . '/../..' . '/../src/core/Classes/Post_Editor.php',
        'MultipleAuthors\\Classes\\Query' => __DIR__ . '/../..' . '/../src/core/Classes/Query.php',
        'MultipleAuthors\\Classes\\Term_Editor' => __DIR__ . '/../..' . '/../src/core/Classes/Term_Editor.php',
        'MultipleAuthors\\Classes\\Utils' => __DIR__ . '/../..' . '/../src/core/Classes/Utils.php',
        'MultipleAuthors\\Container' => __DIR__ . '/../..' . '/../src/core/Container.php',
        'MultipleAuthors\\CustomFieldsModel' => __DIR__ . '/../..' . '/../src/core/CustomFieldsModel.php',
        'MultipleAuthors\\Factory' => __DIR__ . '/../..' . '/../src/core/Factory.php',
        'MultipleAuthors\\Plugin' => __DIR__ . '/../..' . '/../src/core/Plugin.php',
        'MultipleAuthors\\Services' => __DIR__ . '/../..' . '/../src/core/Services.php',
        'MultipleAuthors\\Traits\\Author_box' => __DIR__ . '/../..' . '/../src/core/Traits/Author_box.php',
        'MultipleAuthors\\View' => __DIR__ . '/../..' . '/../src/core/View.php',
        'MultipleAuthors\\ViewInterface' => __DIR__ . '/../..' . '/../src/core/ViewInterface.php',
        'MultipleAuthors\\WP_Cli' => __DIR__ . '/../..' . '/../src/core/WP_Cli.php',
        'MultipleAuthors\\Widget' => __DIR__ . '/../..' . '/../src/core/Widget.php',
        'PPAuthors\\YoastSEO\\SchemaFacade' => __DIR__ . '/../..' . '/../src/modules/yoast-seo-integration/src/SchemaFacade.php',
        'PPAuthors\\YoastSEO\\YoastAuthor' => __DIR__ . '/../..' . '/../src/modules/yoast-seo-integration/src/YoastAuthor.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitPPAuthors::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitPPAuthors::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitPPAuthors::$classMap;

        }, null, ClassLoader::class);
    }
}
