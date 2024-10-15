
const assert = require('assert')
const webdriver = require('selenium-webdriver');
const By = webdriver.By;

class BasePage {
  constructor(driver) {
    this.driver = driver;
  }

  async visit(url) {
    await this.driver.get(url);
  }

  async find(locator) {
    return this.driver.findElement(By.css(locator));
  }

  async findAndClick(locator) {
    await (await this.find(locator)).click();
  }

  
    async findAndClick(cssSelector) {
      const element = await driver.findElement(By.css(cssSelector));
      await element.click();
    }
  
    async findFormInputByLabel(labelText) {
      const label = await this.driver.findElement(By.xpath(`//label[contains(text(), '${labelText}')]/..`));
      const input = await label.findElement(By.css("input,textarea"));
      return input;
    }
  
  async findAndSendKeys(locator, keys) {
    await this.find(locator).sendKeys(keys)
  }

  async findAndClick(locator) {
    await(await this.find(locator)).click()
  }

  action() {
    return this.driver.actions()
  }

  async doubleClick(element) {
    await this.action().doubleClick(await this.find(element)).perform()
  }

  async rightClick(element) {
    await this.action.contextClick(await this.find(element)).perform()
  }

  async getText(element) {
    return await (await this.find(element)).getText()
  }

  async sleep(ms) {
    await this.driver.sleep(ms)
  }

  async assertText(element, text) {
    assert.equal(await this.getText(element), text)
  }

  //-----------------------------------------------------

}


module.exports = BasePage
