<?php
/***************************************************************
 * Extension Manager/Repository config file for ext "th_rating".
 *
 * Auto generated 15-03-2014 11:57
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/
$EM_CONF[$_EXTKEY] = [
    'title' => 'Rating AX',
    'description' => 'Highly flexible AJAX rating based on extbase/fluid/jquery. Allows multiple ratings within one page. Could be used as a cObj by other extensions or included in every FLUID template using the viewhelper. Each ratingstep could be configured having a name - international localization included.',
    'category' => 'misc',
    'version' => '1.7.4',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Thomas Hucke',
    'author_email' => 'thucke@web.de',
    'author_company' => '',
    'constraints' => [
        'depends' => [
            'php' => '7.1.0-7.3.99',
            'typo3' => '8.7.7-9.5.99',
            'static_info_tables' => '6.2.0-7.0.0', ],
        'conflicts' => [],
        'suggests' => [], ],
    'autoload' => [
        'psr-4' => [
            'Thucke\\ThRating\\' => 'Classes', ], ],
    '_md5_values_when_last_written' => 'a:133:{s:11:"changes.txt";s:4:"149f";s:16:"ext_autoload.php";s:4:"ad1e";s:12:"ext_icon.gif";s:4:"de07";s:17:"ext_localconf.php";s:4:"0766";s:14:"ext_tables.php";s:4:"cfaa";s:14:"ext_tables.sql";s:4:"c36b";s:24:"ext_typoscript_setup.txt";s:4:"c7d1";s:37:"Classes/Controller/VoteController.php";s:4:"50a6";s:31:"Classes/Domain/Model/Rating.php";s:4:"1665";s:37:"Classes/Domain/Model/Ratingobject.php";s:4:"79bf";s:33:"Classes/Domain/Model/Stepconf.php";s:4:"1af2";s:33:"Classes/Domain/Model/Stepname.php";s:4:"22ca";s:32:"Classes/Domain/Model/Syslang.php";s:4:"6705";s:29:"Classes/Domain/Model/Vote.php";s:4:"725d";s:30:"Classes/Domain/Model/Voter.php";s:4:"c408";s:52:"Classes/Domain/Repository/RatingobjectRepository.php";s:4:"2685";s:46:"Classes/Domain/Repository/RatingRepository.php";s:4:"faae";s:48:"Classes/Domain/Repository/StepconfRepository.php";s:4:"890b";s:48:"Classes/Domain/Repository/StepnameRepository.php";s:4:"ec54";s:47:"Classes/Domain/Repository/SyslangRepository.php";s:4:"3449";s:44:"Classes/Domain/Repository/VoteRepository.php";s:4:"5afc";s:45:"Classes/Domain/Repository/VoterRepository.php";s:4:"54f7";s:50:"Classes/Domain/Validator/RatingobjectValidator.php";s:4:"dbd8";s:44:"Classes/Domain/Validator/RatingValidator.php";s:4:"56c4";s:46:"Classes/Domain/Validator/StepconfValidator.php";s:4:"2bd0";s:46:"Classes/Domain/Validator/StepnameValidator.php";s:4:"e01e";s:42:"Classes/Domain/Validator/VoteValidator.php";s:4:"4cb8";s:40:"Classes/Service/AccessControlService.php";s:4:"4b3a";s:35:"Classes/Service/AccessException.php";s:4:"cdf7";s:33:"Classes/Service/CookieService.php";s:4:"4782";s:40:"Classes/Service/ExtensionHelperService.php";s:4:"16cf";s:52:"Classes/Utility/BE.tx_thrating_unlinkDynCss_eval.php";s:4:"5ab9";s:46:"Classes/Utility/ExtensionManagementUtility.php";s:4:"b030";s:43:"Classes/Utility/TCALabelUserFuncUtility.php";s:4:"acbc";s:40:"Classes/ViewHelpers/RatingViewHelper.php";s:4:"83b1";s:40:"Classes/ViewHelpers/SelectViewHelper.php";s:4:"4a75";s:40:"Configuration/Flexforms/flexform_pi1.xml";s:4:"60ed";s:53:"Configuration/TCA/tx_thrating_domain_model_rating.php";s:4:"97ef";s:59:"Configuration/TCA/tx_thrating_domain_model_ratingobject.php";s:4:"4862";s:55:"Configuration/TCA/tx_thrating_domain_model_stepconf.php";s:4:"4482";s:55:"Configuration/TCA/tx_thrating_domain_model_stepname.php";s:4:"021e";s:51:"Configuration/TCA/tx_thrating_domain_model_vote.php";s:4:"da46";s:38:"Configuration/TypoScript/constants.txt";s:4:"6297";s:34:"Configuration/TypoScript/setup.txt";s:4:"c439";s:38:"Documentation/Manual/defaultLayout.gif";s:4:"08bb";s:38:"Documentation/Manual/defaultLayout.odp";s:4:"960a";s:31:"Documentation/Manual/manual.txt";s:4:"f3d3";s:38:"Documentation/Model/Umlet/en/Model.uxf";s:4:"3a6c";s:40:"Resources/Private/Language/locallang.xlf";s:4:"4e54";s:44:"Resources/Private/Layouts/DefaultLayout.html";s:4:"779f";s:41:"Resources/Private/Partials/infoBlock.html";s:4:"d531";s:47:"Resources/Private/Partials/ratinglinkBlock.html";s:4:"b6fe";s:43:"Resources/Private/Partials/usersRating.html";s:4:"a13e";s:47:"Resources/Private/Templates/singletonInput.html";s:4:"878d";s:43:"Resources/Private/Templates/Vote/Index.html";s:4:"eccc";s:41:"Resources/Private/Templates/Vote/New.html";s:4:"3469";s:49:"Resources/Private/Templates/Vote/Ratinglinks.html";s:4:"2c3f";s:42:"Resources/Private/Templates/Vote/Show.html";s:4:"ac9e";s:47:"Resources/Private/Templates/Vote/Singleton.html";s:4:"54b9";s:37:"Resources/Public/Css/facesbarTilt.gif";s:4:"daea";s:35:"Resources/Public/Css/rating_bar.png";s:4:"1057";s:31:"Resources/Public/Css/smiley.gif";s:4:"48cb";s:30:"Resources/Public/Css/stars.gif";s:4:"9cdb";s:34:"Resources/Public/Css/starsTilt.gif";s:4:"9d77";s:31:"Resources/Public/Css/styles.css";s:4:"eb14";s:44:"Resources/Public/Css/Graphics/rating_bar.svg";s:4:"5ea9";s:50:"Resources/Public/Css/Graphics/rating_bar_plain.svg";s:4:"5713";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-2.png";s:4:"fe91";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-3.png";s:4:"2a69";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-4.png";s:4:"083c";s:86:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-new-5.png";s:4:"cf1a";s:91:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-new-list-3.png";s:4:"6946";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-new.png";s:4:"6fcf";s:87:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-silver.png";s:4:"ce0c";s:90:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-toolbar-2.png";s:4:"92e3";s:90:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-toolbar-3.png";s:4:"fb12";s:88:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/bookmark-toolbar.png";s:4:"65aa";s:77:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/stars.xcf";s:4:"067d";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/16x16/starsTilt.xcf";s:4:"3849";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-angry.png";s:4:"31a4";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-cool.png";s:4:"7b81";s:85:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-devilish.png";s:4:"8931";s:88:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-embarrassed.png";s:4:"9fb2";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-laugh.png";s:4:"5487";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-monkey.png";s:4:"b3d1";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-plain-2.png";s:4:"4984";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-plain.png";s:4:"beb8";s:88:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-raspberry-2.png";s:4:"a692";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-sad-2.png";s:4:"f859";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-smile-3.png";s:4:"069e";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-smirk.png";s:4:"a663";s:86:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-uncertain.png";s:4:"28cd";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-wink-2.png";s:4:"3916";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-wink-3.png";s:4:"fa85";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-wink.png";s:4:"740e";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/face-worried.png";s:4:"952d";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/facesbarTilt.xcf";s:4:"27b4";s:123:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/pictograms-road_signs-10_downward_gradient_roadsign.png";s:4:"4805";s:78:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/24x24/smiley.xcf";s:4:"5d00";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/draw-line-2.png";s:4:"3a9e";s:104:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/pictogram-din-e011-meeting_point.png";s:4:"23e4";s:96:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/pictogram-din-f006-phone.png";s:4:"9ee2";s:98:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/pictograms-hazard_signs-29.png";s:4:"5676";s:97:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/pictographs-stairs_up_inv.png";s:4:"9855";s:110:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/32x32/road-sign-us-mutcd-w21-1a-construction.png";s:4:"fbe4";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-angry.svg";s:4:"2a3e";s:79:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-cool.svg";s:4:"c49a";s:83:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-devilish.svg";s:4:"fd03";s:86:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-embarrassed.svg";s:4:"adef";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-laugh.svg";s:4:"7486";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-monkey.svg";s:4:"ae2c";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-plain.svg";s:4:"e258";s:86:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-raspberry-2.svg";s:4:"941c";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-sad-2.svg";s:4:"22b5";s:80:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-smirk.svg";s:4:"2687";s:84:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-uncertain.svg";s:4:"de5f";s:81:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-wink-2.svg";s:4:"784e";s:82:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/face-worried.svg";s:4:"2226";s:121:"Resources/Public/Css/Graphics/openiconlibrary.sourceforge.net/svg/pictograms-road_signs-10_downward_gradient_roadsign.svg";s:4:"ed96";s:58:"Resources/Public/Icons/tx_thrating_domain_model_rating.gif";s:4:"de07";s:64:"Resources/Public/Icons/tx_thrating_domain_model_ratingobject.gif";s:4:"2c15";s:60:"Resources/Public/Icons/tx_thrating_domain_model_stepconf.gif";s:4:"ab19";s:60:"Resources/Public/Icons/tx_thrating_domain_model_stepname.gif";s:4:"c85a";s:56:"Resources/Public/Icons/tx_thrating_domain_model_vote.gif";s:4:"fe33";s:30:"Resources/Public/Js/actions.js";s:4:"b47f";s:34:"Resources/Public/Js/jquery.form.js";s:4:"7a63";s:39:"Tests/Domain/Model/RatingobjectTest.php";s:4:"0cbe";s:33:"Tests/Domain/Model/RatingTest.php";s:4:"80bd";s:37:"Tests/Domain/Model/StepconfigTest.php";s:4:"90eb";s:31:"Tests/Domain/Model/VoteTest.php";s:4:"644b";s:53:"Tests/Domain/Repository/RatingobjectRepositoryTest.ph";s:4:"2d0e";s:14:"doc/manual.sxw";s:4:"441d";s:14:"doc/manual.txt";s:4:"f3d3";}',
];
