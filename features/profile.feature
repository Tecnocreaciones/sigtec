Feature: Profile
  In order to manager my profile
  As a website client
  I users credentials to login

    Background:
        Given I am logged in as client

    @javascript
    Scenario: Display profile
        Given I should on my account profile page
        Then I should see "Perfil"

    @javascript
    Scenario: Update password with incorrect values
        Given I am on my account password page
        Then I should see "Actualizar contraseña"
        When I fill in the following:
            | Nueva contraseña | 12345abc |
            | Repita la contraseña | 54321abc |
            | Contraseña actual | cliente1 |
        And I press "Guardar"
        Then I should see "Las contraseñas introducidas no coinciden"
        Then I should see "Este valor debería ser la contraseña actual del usuario"

    @javascript
    Scenario: Update password successfully
        Given I am on my account password page
        Then I should see "Actualizar contraseña"
        When I fill in the following:
            | Nueva contraseña | 12345abc |
            | Repita la contraseña | 12345abc |
            | Contraseña actual | admin |
        And I press "Guardar"
        Then I should see "La contraseña se ha cambiado con éxito"

    @javascript
    Scenario: Update profile with incorrect password
        Given I am on my account profile edition page
        Then I should see "Actualizar"
        When I fill in the following:
            | Nombre de usuario | pjulio |
            | fos_user_profile_form_firstName | Julio |
            | Apellido | Pepito |
            | Email | pepito@pepe.com |
            | Contraseña actual | myincorrectpassword |
        And I press "Guardar"
        Then I should see "Este valor debería ser la contraseña actual del usuario"

    @javascript
    Scenario: Update profile successfully
        Given I am on my account profile edition page
        Then I should see "Actualizar"
        When I fill in the following:
            | Nombre de usuario | pjulio |
            | fos_user_profile_form_firstName | Julio |
            | Apellido | Pepito |
            | Email | pepito@pepe.com |
            | Contraseña actual | admin |
        And I press "Guardar"
        Then I should see "El perfil ha sido actualizado"

    @javascript
    Scenario: Logout profile successfully
        Given I am on logout page
        Then I should be on login page