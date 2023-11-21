# DetailsGen 

### 1. **Testing and Mocking:**

- Easily generate realistic test data for applications that require Nigerian-specific information, ensuring thorough
  testing of various scenarios.

### 2. **Data Seeding:**

- Seed databases with diverse and representative Nigerian details for development and testing purposes.

### 3. **Randomization:**

- Facilitate the creation of dynamic and diverse user experiences by incorporating random Nigerian names, addresses, and
  other details.

### 4. **Demo Applications:**

- Build demo applications with authentic Nigerian data to showcase features and functionalities.

## CurrencyGen

The `CURRENCYGEN` class addresses the currency-related needs of Nigerian PHP developers, offering functionality such
as:

### 1. **Transaction Reference Generation:**

- Generate unique transaction references with both alphanumeric and numeric options, suitable for financial
  applications.

### 2. **Currency Formatting:**

- Easily format currency values in various formats, including Nigerian Naira (NGN), US Dollar (USD), Euro (EUR), British
  Pound (GBP), and more.

### 3. **Amount Generation:**

- Quickly generate random amounts in Nigerian Naira for testing and simulation purposes, covering both large and small
  values.

### 4. **Currency Diversity:**

- Address global currency formatting needs, enabling developers to work with different currencies beyond the Nigerian
  Naira.

## How Nigerian PHP Developers Benefit

### 1. **Efficient Development:**

- Speed up development processes by automating the generation of realistic and varied Nigerian data for testing and
  development.

### 2. **Realistic Testing Scenarios:**

- Ensure comprehensive testing by incorporating authentic Nigerian details, improving the accuracy of testing scenarios.

### 3. **Data Privacy Compliance:**

- Facilitate GDPR and other data privacy compliance by using generated data instead of real user information during
  development and testing.

### 4. **Global Currency Handling:**

- Easily handle and format various global currencies, enhancing the versatility of PHP applications developed by
  Nigerian developers.

### 5. **Demo Applications Showcase:**

- Quickly create demo applications with realistic Nigerian details, providing a more immersive and relatable experience
  for potential users.

### 6. **Contribution to Open Source:**

- Contribute to and benefit from open-source projects that cater to the specific needs of the Nigerian developer
  community.

## Get Started

To incorporate these libraries into your PHP projects, follow the installation and usage instructions provided in the
respective library sections above.
generating random Nigerian details such as names, email addresses, phone numbers, and more.

## Installation

Install the package using Composer:

```bash
composer require cyber/uniqgen
```

## Usage

```php
use cyber\DetailsGen\DetailsGen;

// Generate a random Nigerian state
$randomState = DetailsGen::randomNigerianState();

// Generate a random Nigerian city
$randomCity = DetailsGen::randomNigerianCity();

// Generate a random Nigerian university
$randomUniversity = DetailsGen::randomNigerianUniversity();

// Generate a random Nigerian polytechnic
$randomPolytechnic = DetailsGen::randomNigerianPolytechnics();

// Generate a random Nigerian ministry
$randomMinistry = DetailsGen::randomNigerianMinistry();

// Generate a random email address
$randomEmail = DetailsGen::generateRandomEmail();

// Generate a random English full name
$randomEnglishName = DetailsGen::EnglishFullName();

// Generate a random Yoruba full name
$randomYorubaName = DetailsGen::YorubaFullName();

// Generate a random Yoruba full name with a middle name
$randomYorubaWithMiddleName = DetailsGen::YorubaWithMiddleName();

// Generate a random Igbo full name
$randomIgboName = DetailsGen::IgboFullName();

// Generate a random Igbo full name with a middle name
$randomIgboWithMiddleName = DetailsGen::IgboWithMiddleName();

// Generate a random English first name
$randomEnglishFirstName = DetailsGen::OneEnglishName();

// Generate a random Yoruba first name
$randomYorubaFirstName = DetailsGen::OneYorubaName();

// Generate a random Igbo first name
$randomIgboFirstName = DetailsGen::OneIgboName();

// Generate a full name with a random middle name
$fullNameWithMiddleName = DetailsGen::withMiddleName();

// Generate a random Nigerian phone number
$randomPhoneNumber = DetailsGen::nigerianPhoneNumber();

// Generate a random Nigerian bank name
$randomBankName = DetailsGen::generateRandomBankName();

// Generate a random bank account number
$randomAccountNumber = DetailsGen::generateRandomAccountNumber();

// Generate a random National Identification Number (NIN)
$randomNIN = DetailsGen::NIN();

// Generate a random Bank Verification Number (BVN)
$randomBVN = DetailsGen::BVN();
```

# CurrencyGen

A PHP library for generating random currency-related details, including transaction references and formatted currency
values.

## Installation

Install the package using Composer:

```bash
composer require cyber/uniqgen
```

## Usage

```php
use cyber\CurrencyGen\CurrencyGen;

// Create an instance of CurrencyGen
$currencyGen = new CurrencyGen();

// Generate a random amount of money in Nigerian Naira (NGN)
$randomNGNAmount = CurrencyGen::bigMoney();

// Generate a small random amount of money in NGN
$randomSmallNGNAmount = CurrencyGen::smallMoney();

// Generate a random alphanumeric transaction reference
$randomAlphaNumericReference = $currencyGen->getTransactionReference();

// Generate a random numeric transaction reference
$randomNumericReference = (new CurrencyGen(false))->getTransactionReference();

// Format a value as Nigerian Naira (NGN)
$formattedNGNValue = CurrencyGen::showNaira(1000);

// Format a value as US Dollar (USD)
$formattedUSDValue = CurrencyGen::showDollar(1000);

// Format a value as Euro (EUR)
$formattedEuroValue = CurrencyGen::showEuro(1000);

// Format a value as British Pound (GBP)
$formattedGBPValue = CurrencyGen::showPound(1000);

// Format a value as Japanese Yen (JPY)
$formattedJPYValue = CurrencyGen::showYen(1000);

// Format a value as Swiss Franc (CHF)
$formattedCHFValue = CurrencyGen::showFranc(1000);

// Format a value as Australian Dollar (AUD)
$formattedAUDValue = CurrencyGen::showAUD(1000);

// Format a value as Canadian Dollar (CAD)
$formattedCADValue = CurrencyGen::showCAD(1000);

// Format a value as Indian Rupee (INR)
$formattedINRValue = CurrencyGen::showINR(1000);

// Format a value as South African Rand (ZAR)
$formattedZARValue = CurrencyGen::showZAR(1000);
```

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.