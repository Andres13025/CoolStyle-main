using OpenQA.Selenium;
using OpenQA.Selenium.Chrome;
using System;
using System.Threading;
using Xunit;

namespace CoolStyle_Selenium
{
    public class UnitTest1
    {
        [Fact]
        public void IngresarAlLogin()
        {
            IWebDriver driver = new ChromeDriver();
            driver.Manage().Window.Maximize();
            driver.Navigate().GoToUrl("http://localhost/CoolStyle2-master/index.php");

            driver.FindElement(By.XPath("/html/body/div[18]/header[1]/a/input")).Click();
            Thread.Sleep(5000);
            driver.FindElement(By.XPath("/html/body/section/form/div/input[1]")).SendKeys("carlosandresvalerovelasco@gmail.com");
            Thread.Sleep(5000);
            driver.FindElement(By.XPath("/html/body/section/form/div/input[2]")).SendKeys("12345");
            Thread.Sleep(5000);

            driver.FindElement(By.XPath("/html/body/section/form/div/input[3]")).Click();
            Thread.Sleep(5000);
            driver.Close();
        }
        [Fact]
        public void IngresarAlLoginFallido()
        {
            IWebDriver driver = new ChromeDriver();
            driver.Manage().Window.Maximize();
            driver.Navigate().GoToUrl("http://localhost/CoolStyle2-master/index.php");

            driver.FindElement(By.XPath("/html/body/div[18]/header[1]/a/input")).Click();
            Thread.Sleep(5000);
            driver.FindElement(By.XPath("/html/body/section/form/div/input[1]")).SendKeys("user@gmail.com");
            Thread.Sleep(5000);
            driver.FindElement(By.XPath("/html/body/section/form/div/input[2]")).SendKeys("12asda345");
            Thread.Sleep(5000);

            driver.FindElement(By.XPath("/html/body/section/form/div/input[3]")).Click();
            Thread.Sleep(5000);
            driver.Close();
        }
        [Fact]
        public void ConsultarProducto()
        {
            IWebDriver driver = new ChromeDriver();
            driver.Manage().Window.Maximize();
            driver.Navigate().GoToUrl("http://localhost/CoolStyle2-master/index.php");

            driver.FindElement(By.XPath("/html/body/div[18]/header[1]/a/input")).Click();
            Thread.Sleep(5000);
            driver.FindElement(By.XPath("/html/body/section/form/div/input[1]")).SendKeys("carlosandresvalerovelasco@gmail.com");
            Thread.Sleep(5000);
            driver.FindElement(By.XPath("/html/body/section/form/div/input[2]")).SendKeys("12345");
            Thread.Sleep(5000);

            driver.FindElement(By.XPath("/html/body/section/form/div/input[3]")).Click();
            Thread.Sleep(5000);

            driver.FindElement(By.XPath("/html/body/a[2]")).Click();

            driver.Close();
        }
        [Fact]
        public void Registro()
        {
            IWebDriver driver = new ChromeDriver();
            driver.Manage().Window.Maximize();
            driver.Navigate().GoToUrl("http://localhost/CoolStyle2-master/index.php");

            driver.FindElement(By.XPath("/html/body/div[18]/header[2]/a/input")).Click();
            Thread.Sleep(5000);
            driver.FindElement(By.XPath("/html/body/section/div/form/input[1]")).SendKeys("harry rodriguez");
            driver.FindElement(By.XPath("/html/body/section/div/form/input[2]")).SendKeys("harry@gmail.com");
            driver.FindElement(By.XPath("/html/body/section/div/form/input[3]")).SendKeys("123456");

            driver.FindElement(By.XPath("/html/body/section/div/form/input[4]")).Click();
            Thread.Sleep(5000);

            driver.Close();
        }
        [Fact]
        public void Registro_Fallo()
        {
            IWebDriver driver = new ChromeDriver();
            driver.Manage().Window.Maximize();
            driver.Navigate().GoToUrl("http://localhost/CoolStyle2-master/index.php");

            driver.FindElement(By.XPath("/html/body/div[18]/header[2]/a/input")).Click();
            Thread.Sleep(5000);
            driver.FindElement(By.XPath("/html/body/section/div/form/input[1]")).SendKeys("harry rodriguez");
            driver.FindElement(By.XPath("/html/body/section/div/form/input[2]")).SendKeys("harry@gmail.com");
            driver.FindElement(By.XPath("/html/body/section/div/form/input[3]")).SendKeys("123456");

            driver.FindElement(By.XPath("/html/body/section/div/form/input[4]")).Click();
            Thread.Sleep(5000);

            driver.Close();
        }
    }
}
