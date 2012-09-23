<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use MageTest\MagentoExtension\Context\MagentoContext;

/**
 * Features context.
 */
class FeatureContext extends MagentoContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @When /^I run any scenario$/
     */
    public function iRunAnyScenario()
    {

    }

    /**
     * @Given /^we have some files in the config cache of magento$/
     */
    public function weHaveSomeFilesInTheConfigCacheOfMagento()
    {
        // TODO Can't create as part of the background as it happens after
        // the before hook
        // $dir = Mage::getBaseDir('cache');
        // exec("mkdir -p $dir/mage--a && touch $dir/mage--a/mage--PDO123");
        // sleep(5);
    }

    /**
     * @Then /^the before hook will call the cache manager and clear the cache$/
     */
    public function theBeforeHookWillCallTheCacheManagerAndClearTheCache()
    {
        $dir = Mage::getBaseDir('cache');
        if (count(glob("$dir/mage*")))
        {
            throw new RuntimeException("File should not exist");
        }
    }

    /**
     * @Given /^I am on "([^"]*)"$/
     */
    public function iAmOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should see "([^"]*)"$/
     */
    public function iShouldSee($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^the search box should contain the message "([^"]*)"$/
     */
    public function theSearchBoxShouldContainTheMessage($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^I should see a button with the text "([^"]*)"$/
     */
    public function iShouldSeeAButtonWithTheText($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should see the text "([^"]*)"$/
     */
    public function iShouldSeeTheText($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^a dropdown with the options "([^"]*)"$/
     */
    public function aDropdownWithTheOptions($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should see "([^"]*)" and a dropdown with the values "([^"]*)"$/
     */
    public function iShouldSeeAndADropdownWithTheValues($arg1, $arg2)
    {
        throw new PendingException();
    }
}
