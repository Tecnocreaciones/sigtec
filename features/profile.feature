Feature: Company
  In order to manager my profile
  As a website client
  I users credentials to login

    Background:
        Given I am logged in as client

    @javascript
    Scenario: Update password in profile
        Given I should on my account profile page
        Then I should see "Perfil"