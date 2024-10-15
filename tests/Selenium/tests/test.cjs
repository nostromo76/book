console.log("Test file is being executed.");
const { Builder, By } = require("selenium-webdriver");
const assert = require("assert");
const BasePage = require('./pages/BasePage.cjs');

let driver;

describe("Testiranje otvaranja stranice", function () {
    let basePage;

    before("Inicijalizacija drivera", async function () {
        this.timeout(20000); // Set timeout for async before hook
        driver = await new Builder().forBrowser("chrome").build();
        basePage = new BasePage(driver);
    });

    after("Zatvaranje browsera", async function () {
        await driver.quit();
    });

    it("Otvara stranicu i cekira tab naslov da li smo na pravoj stranici", async function () {
        this.timeout(5000); 
        await basePage.visit("http://book.test/");
        await driver.manage().window().maximize();
        const title = await driver.getTitle();
        assert.equal(title, "Home page");
    });

  
});
