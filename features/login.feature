Feature: Login
  In order to see a word definition
  As a website user
  I users credentials to login
    
    Background:
      And there are following users:
      | email | password | enabled | 
      | demo  | 12345abg | yes    |
      | test| testabg  | no    |
      
    @javascript
    Scenario: Login in form by user unregistered
      Given I am on login page
      When I fill in the following:
          | login | Demo |
          | pass | 1234  |
      And I press "Ingresar"
      Then I should see "Comprobando de credenciales"
      And I wait a few seconds
      Then I should see "Nombre de usuario o Contraseña inválido"

    @javascript
    Scenario: Recover password by email unregistered
      Given I am on login page
      And I click on the text "Recuperar contraseña"
      And I wait a few seconds
      When I fill in "mail" with "demo@example.local"
      And I press "Enviarme las instrucciones"
      Then I should see "Enviando instrucciones"
      And I wait a few seconds
      Then I should see "El usuario o dirección de correo \"demo@example.local\" no existe"

    @javascript
    Scenario: Register new user
      Given I am on login page
      And I click on the text "Registro"
      And I wait a few seconds
      When I fill in the following:
        | name-register | Usuario Test        |
        | mail-register | demo@example.local  |
        | login-register | Usuario            |
        | pass-register | 12345abc            |
      And I press "send-register"
      Then I should see "Registrando"
      And I wait a few seconds
      Then I should see "Felicidades Usuario, tu cuenta está ahora confirmada"

    @javascript
    Scenario: Login in form with account disabled 
      Given I am on login page
      When I fill in the following:
          | login | test    |
          | pass | testabg  |
      And I press "Ingresar"
      Then I should see "Comprobando de credenciales"
      And I wait a few seconds
      Then I should see "Cuenta de usuario desactivada"

    @javascript
    Scenario: Login in form with account enabled
      Given I am on login page
      When I fill in the following:
          | login | demo    |
          | pass | 12345abg |
      And I press "Ingresar"
      Then I should see "Comprobando de credenciales"
      And I wait a few seconds
      Then I should see "Dashboard"