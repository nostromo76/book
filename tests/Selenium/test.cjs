const { Builder, By, Key, until } = require('selenium-webdriver');

async function runTest() {
    // Create a new instance of the Chrome driver
    let driver = await new Builder().forBrowser('chrome').build();

    try {
        // Navigate to your Laravel application
        await driver.get('http://book.test/');

        // Optionally wait until a specific element is present (e.g., an element with id 'welcome')
        // await driver.wait(until.elementLocated(By.id('welcome')), 10000);

        // Log the page title to the console
        const title = await driver.getTitle();
        console.log(`Page Title: ${title}`);
        
        // Optionally assert the title
        if (title === 'Expected Title') {
            console.log('Test passed: Title is correct.');
        } else {
            console.log('Test failed: Title is incorrect.');
        }
    } catch (error) {
        console.error('Error:', error);
    } finally {
        // Quit the driver
        await driver.quit();
    }
}

runTest();
