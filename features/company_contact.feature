Feature: Company Contact
  In order to administer the contacts of a company
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
    Scenario: Add contact to company
        Given I am on a "V-19000009-0" company
        Then I should see "Detalles"
        #Button add on block contacts
        When I click on the element with xpath "//*[@id='main']/div[2]/div[2]/div[1]/div/a"
        Then I should see "Registro de contacto"
        When I fill in the following:
            | Nombre    | Pepe              |
            | Apellido  | Sevallo           |
            | Cargo     | Contador          |
        And I press "Registrar"
        Then I should see "El contacto ha sido creado"

    @javascript
    Scenario: Updating existing contact of company
        Given I am on a "V-19000009-0" company
        Then I click on the text "Rafael Carrillo"
        Then I should see "Contacto"
        When I click on edit button
        Then I should see "Actualizar contacto"
        When I fill in the following:
            | Nombre    | Casimiro          |
            | Apellido  | Quintana          |
            | Cargo     | Diseñador         |
        And I press "Guardar"
        Then I should see "El contacto ha sido actualizado"

    @javascript
    Scenario: Removing existing contact of company
        Given I am on a "V-19000009-0" company
        Then I click on the text "Rafael Carrillo"
        Then I should see "Contacto"
        When I click on delete button
        Then I should see "El contacto ha sido eliminado"