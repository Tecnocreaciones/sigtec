Feature: Company
  In order to administer the company
  As a website client
  I users credentials to login

    Background:
        Given I am logged in as client

    Scenario: Registering new contact
        Given I am on the company new page