Feature: Company
  In order to administer the company
  As a website client
  I users credentials to login

    Background:
        Given I am logged in as client

    @javascript
    Scenario: Registering new company
        Given I am on the company create page
        Then I should see "Registro de empresa"
        When I fill in the following:
            | RIF | V-19000000-2 |
            | Nombre | Calos Mendoza |
            | Email | carlos@tecnocreaciones.com |
        And I press "Registrar"
        Then I should see "La empresa se ha creado"