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
        Given I am on the company index page
        Then I should see "Lista"
        Then I should see "V-19000001-0"
        And I click on the text "Carlos"
        Then I should see "Detalles"
        #Button edit
        When I click on the element with xpath "//*[@id='main']/div[2]/p/a"
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
        Given I am on the company index page
        Then I should see "Lista"
        Then I should see "V-19000001-0"
        And I click on the text "Carlos"
        Then I should see "Detalles"
        #Button delete
        When I click on the element with xpath "//*[@id='main']/div[2]/p/button"
        Then I should see "Desea eliminar este elemento"
        And I press "Si"
        Then I should see "La empresa se ha eliminado"

    @javascript
    Scenario: Add plant to company
        Given I am on the company index page
        Then I should see "Lista"
        And I wait a few seconds
        Then I should see "V-19000001-0"
        And I click on the text "Carlos"
        Then I should see "Detalles"
        #Button add on block plants
        When I click on the element with xpath "//*[@id='main']/div[2]/div[1]/div[1]/div/a"
        Then I should see "Registro de planta"
        When I fill in the following:
            | Nombre    | Eduardo                    |
            | Email     | carlos@tecnocreaciones.com |
            | Dirección | Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec molestie at enim sed commodo. Nullam scelerisque arcu eu suscipit. |
        When I fill in "coramer_sigtec_companybundle_plant_phones_0_number" with "+58-412-000-0000"
        And I click on the text "Añade un teléfono"
        When I fill in "coramer_sigtec_companybundle_plant_phones_1_number" with "0800-555-5555"
        Given I additionally select "Almacenaje de materia prima" from "coramer_sigtec_companybundle_plant_dedications"
        Given I additionally select "Producción" from "coramer_sigtec_companybundle_plant_dedications"
        Given I additionally select "Apure" from "coramer_sigtec_companybundle_plant_state"
        And I wait a few seconds
        Given I additionally select "San Fernando de Apure" from "coramer_sigtec_companybundle_plant_city"
        And I press "Registrar"
        And I wait a few seconds
        Then I should see "La planta ha sido creada"