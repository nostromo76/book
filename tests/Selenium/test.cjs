const {Builder} = require ('selenium-webdriver')
const googleSearch = async()=>{
let driver = new Builder().forBrowser('chrome').build()
await driver.get('http://book.test/')
await driver.manage().window().maximize()
await driver.sleep(2*1000) 
console.log(typeof await driver.getCurrentUrl())
driver.close()
}
googleSearch();

