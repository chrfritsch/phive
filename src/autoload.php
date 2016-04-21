<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'phario\\phive\\abstractversionconstraint' => '/shared/versionconstraints/AbstractVersionConstraint.php',
                'phario\\phive\\aliasresolver' => '/services/phar/AliasResolver.php',
                'phario\\phive\\anyversionconstraint' => '/shared/versionconstraints/AnyVersionConstraint.php',
                'phario\\phive\\checksumservice' => '/services/checksum/ChecksumService.php',
                'phario\\phive\\cli\\coloredconsoleoutput' => '/shared/cli/output/ColoredConsoleOutput.php',
                'phario\\phive\\cli\\command' => '/shared/cli/Command.php',
                'phario\\phive\\cli\\commandlocator' => '/shared/cli/CommandLocator.php',
                'phario\\phive\\cli\\commandlocatorexception' => '/shared/cli/CommandLocatorException.php',
                'phario\\phive\\cli\\commandoptionsexception' => '/shared/cli/CommandOptionsException.php',
                'phario\\phive\\cli\\consoleinput' => '/shared/cli/input/ConsoleInput.php',
                'phario\\phive\\cli\\consoleoutput' => '/shared/cli/output/ConsoleOutput.php',
                'phario\\phive\\cli\\input' => '/shared/cli/input/Input.php',
                'phario\\phive\\cli\\options' => '/shared/cli/Options.php',
                'phario\\phive\\cli\\output' => '/shared/cli/output/Output.php',
                'phario\\phive\\cli\\request' => '/shared/cli/Request.php',
                'phario\\phive\\cli\\runner' => '/shared/cli/Runner.php',
                'phario\\phive\\commandlocator' => '/commands/CommandLocator.php',
                'phario\\phive\\composeralias' => '/shared/ComposerAlias.php',
                'phario\\phive\\composercommand' => '/commands/composer/ComposerCommand.php',
                'phario\\phive\\composercommandconfig' => '/commands/composer/ComposerCommandConfig.php',
                'phario\\phive\\composerservice' => '/commands/composer/ComposerService.php',
                'phario\\phive\\config' => '/shared/config/Config.php',
                'phario\\phive\\configexception' => '/shared/exceptions/ConfigException.php',
                'phario\\phive\\curl' => '/shared/http/Curl.php',
                'phario\\phive\\curlconfig' => '/shared/http/CurlConfig.php',
                'phario\\phive\\curlexception' => '/shared/exceptions/CurlException.php',
                'phario\\phive\\directory' => '/shared/Directory.php',
                'phario\\phive\\directoryexception' => '/shared/exceptions/DirectoryException.php',
                'phario\\phive\\downloadfailedexception' => '/shared/exceptions/DownloadFailedException.php',
                'phario\\phive\\environment' => '/shared/Environment.php',
                'phario\\phive\\errorexception' => '/shared/exceptions/ErrorException.php',
                'phario\\phive\\exactversionconstraint' => '/shared/versionconstraints/ExactVersionConstraint.php',
                'phario\\phive\\exception' => '/shared/exceptions/Exception.php',
                'phario\\phive\\extensionsmissingexception' => '/shared/exceptions/ExtensionsMissingException.php',
                'phario\\phive\\factory' => '/Factory.php',
                'phario\\phive\\file' => '/shared/File.php',
                'phario\\phive\\filedownloader' => '/shared/download/FileDownloader.php',
                'phario\\phive\\filename' => '/shared/Filename.php',
                'phario\\phive\\git' => '/shared/Git.php',
                'phario\\phive\\gitawarephiveversion' => '/shared/version/GitAwarePhiveVersion.php',
                'phario\\phive\\gitexception' => '/shared/exceptions/GitException.php',
                'phario\\phive\\githubrepository' => '/shared/repository/GithubRepository.php',
                'phario\\phive\\gnupg' => '/shared/GnuPG.php',
                'phario\\phive\\gnupgkeydownloader' => '/services/key/gpg/GnupgKeyDownloader.php',
                'phario\\phive\\gnupgkeyimporter' => '/services/key/gpg/GnupgKeyImporter.php',
                'phario\\phive\\gnupgsignatureverifier' => '/services/signature/gpg/GnupgSignatureVerifier.php',
                'phario\\phive\\gnupgverificationresult' => '/services/signature/gpg/GnupgVerificationResult.php',
                'phario\\phive\\greaterthanorequaltoversionconstraint' => '/shared/versionconstraints/GreaterThanOrEqualToVersionConstraint.php',
                'phario\\phive\\hash' => '/shared/hash/Hash.php',
                'phario\\phive\\helpcommand' => '/commands/help/HelpCommand.php',
                'phario\\phive\\httpclient' => '/shared/http/HttpClient.php',
                'phario\\phive\\httpexception' => '/shared/http/HttpException.php',
                'phario\\phive\\httpprogresshandler' => '/shared/http/HttpProgressHandler.php',
                'phario\\phive\\httpprogressupdate' => '/shared/http/HttpProgressUpdate.php',
                'phario\\phive\\httpresponse' => '/shared/http/HttpResponse.php',
                'phario\\phive\\installationfailedexception' => '/shared/exceptions/InstallationFailedException.php',
                'phario\\phive\\installcommand' => '/commands/install/InstallCommand.php',
                'phario\\phive\\installcommandconfig' => '/commands/install/InstallCommandConfig.php',
                'phario\\phive\\invalidhashexception' => '/shared/exceptions/InvalidHashException.php',
                'phario\\phive\\ioexception' => '/shared/exceptions/IOException.php',
                'phario\\phive\\jsondata' => '/shared/JsonData.php',
                'phario\\phive\\keydownloader' => '/services/key/KeyDownloader.php',
                'phario\\phive\\keyimporter' => '/services/key/KeyImporter.php',
                'phario\\phive\\keyimportresult' => '/services/key/KeyImportResult.php',
                'phario\\phive\\keyservice' => '/services/key/KeyService.php',
                'phario\\phive\\listcommand' => '/commands/list/ListCommand.php',
                'phario\\phive\\localsslcertificate' => '/shared/http/LocalSslCertificate.php',
                'phario\\phive\\phar' => '/shared/phar/Phar.php',
                'phario\\phive\\pharalias' => '/shared/phar/PharAlias.php',
                'phario\\phive\\phardownloader' => '/services/phar/PharDownloader.php',
                'phario\\phive\\pharinstaller' => '/services/phar/PharInstaller.php',
                'phario\\phive\\phariorepository' => '/shared/repository/PharIoRepository.php',
                'phario\\phive\\pharregistry' => '/shared/PharRegistry.php',
                'phario\\phive\\pharregistryexception' => '/shared/exceptions/PharRegistryException.php',
                'phario\\phive\\pharservice' => '/services/phar/PharService.php',
                'phario\\phive\\phiveversion' => '/shared/version/PhiveVersion.php',
                'phario\\phive\\phivexmlconfig' => '/shared/config/PhiveXmlConfig.php',
                'phario\\phive\\publickey' => '/services/key/PublicKey.php',
                'phario\\phive\\purgecommand' => '/commands/purge/PurgeCommand.php',
                'phario\\phive\\purgecommandconfig' => '/commands/purge/PurgeCommandConfig.php',
                'phario\\phive\\release' => '/shared/phar/Release.php',
                'phario\\phive\\releasecollection' => '/shared/phar/ReleaseCollection.php',
                'phario\\phive\\releaseexception' => '/shared/exceptions/ReleaseException.php',
                'phario\\phive\\removecommand' => '/commands/remove/RemoveCommand.php',
                'phario\\phive\\removecommandconfig' => '/commands/remove/RemoveCommandConfig.php',
                'phario\\phive\\requestedphar' => '/shared/phar/RequestedPhar.php',
                'phario\\phive\\resetcommand' => '/commands/reset/ResetCommand.php',
                'phario\\phive\\resetcommandconfig' => '/commands/reset/ResetCommandConfig.php',
                'phario\\phive\\resolveexception' => '/shared/exceptions/ResolveException.php',
                'phario\\phive\\sha1hash' => '/shared/hash/sha/Sha1Hash.php',
                'phario\\phive\\sha256hash' => '/shared/hash/sha/Sha256Hash.php',
                'phario\\phive\\signatureverifier' => '/services/signature/SignatureVerifier.php',
                'phario\\phive\\skelcommand' => '/commands/skel/SkelCommand.php',
                'phario\\phive\\skelcommandconfig' => '/commands/skel/SkelCommandConfig.php',
                'phario\\phive\\source' => '/shared/sources/Source.php',
                'phario\\phive\\sourcerepository' => '/shared/repository/SourceRepository.php',
                'phario\\phive\\sourcerepositoryloader' => '/shared/sources/SourceRepositoryLoader.php',
                'phario\\phive\\sourceslist' => '/shared/sources/SourcesList.php',
                'phario\\phive\\sourceslistexception' => '/shared/exceptions/SourcesListException.php',
                'phario\\phive\\sourceslistfileloader' => '/shared/sources/SourcesListFileLoader.php',
                'phario\\phive\\specificmajorandminorversionconstraint' => '/shared/versionconstraints/SpecificMajorAndMinorVersionConstraint.php',
                'phario\\phive\\specificmajorversionconstraint' => '/shared/versionconstraints/SpecificMajorVersionConstraint.php',
                'phario\\phive\\staticphiveversion' => '/shared/version/StaticPhiveVersion.php',
                'phario\\phive\\unsupportedversionconstraintexception' => '/shared/exceptions/UnsupportedVersionConstraintException.php',
                'phario\\phive\\updatecommand' => '/commands/update/UpdateCommand.php',
                'phario\\phive\\updatecommandconfig' => '/commands/update/UpdateCommandConfig.php',
                'phario\\phive\\updaterepositorylistcommand' => '/commands/update-repository-list/UpdateRepositoryListCommand.php',
                'phario\\phive\\url' => '/shared/Url.php',
                'phario\\phive\\verificationfailedexception' => '/shared/exceptions/VerificationFailedException.php',
                'phario\\phive\\verificationresult' => '/services/signature/VerificationResult.php',
                'phario\\phive\\version' => '/shared/version/Version.php',
                'phario\\phive\\versioncommand' => '/commands/version/VersionCommand.php',
                'phario\\phive\\versionconstraint' => '/shared/versionconstraints/VersionConstraint.php',
                'phario\\phive\\versionconstraintgroup' => '/shared/versionconstraints/VersionConstraintGroup.php',
                'phario\\phive\\versionconstraintparser' => '/shared/versionconstraints/VersionConstraintParser.php',
                'phario\\phive\\versionnumber' => '/shared/version/VersionNumber.php',
                'phario\\phive\\xmlfile' => '/shared/XmlFile.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    true
);
// @codeCoverageIgnoreEnd
