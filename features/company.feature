Feature: Company
  In order to administer the company
  As a website client
  I users credentials to login

    Background:
        Given I am logged in as client
        And there are following companies:
            |     rif      |   name     |        email        |  status   | user   |
            | V-19000001-0 |   Carlos   | mendoza@example.com | yes       | client |
            | V-18000004-0 |   Juan     | cjuan@example.com   | yes       | client |
            | V-17816302-3 |   Pedro    | lpe@example.com     | no        | client |
        And there are following plants:
            | name     | email               | address       | company      |
            | Planta 001 | planta1@example.com | addres for test plant |V-19000001-0  |

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

    @javascript
    Scenario: Updating a company
        Given I am on the company client index page
        Then I should see "Lista"
        And I wait a few seconds
        Then I should see "V-19000001-0"
        And I click on the text "Carlos"
        Then I should see "Detalles"
        When I click on edit button
        Then I should see "Editar empresa"
        When I fill in the following:
            | RIF | V-19000000-5 |
            | Nombre | Eduardo   |
            | Email | carlos@tecnocreaciones.com |
        And I press "Guardar"
        Then I should see "La empresa se ha actualizado"
        Then I should see "V-19000000-5"
        Then I should see "Eduardo"
        Then I should see "carlos@tecnocreaciones.com"

    @javascript
    Scenario: Delete a company
        Given I am on the company client index page
        Then I should see "Lista"
        And I wait a few seconds
        Then I should see "V-17816302-3"
        And I click on the text "Pedro"
        Then I should see "Detalles"
        When I click on delete button
        Then I should see "La empresa se ha eliminado"

    @javascript
    Scenario: Registering existing company by rif
        Given I am on the company create page
        Then I should see "Registro de empresa"
        When I fill in the following:
            | RIF | V-19000001-0 |
            | Nombre | Calos Ortega |
            | Email | carlos@tecnocreaciones.com |
        And I press "Registrar"
        Then I should see "Este RIF ya se encuentra registrado"
