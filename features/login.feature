Feature: Login
  In order to see a word definition
  As a website user
  I users credentials to login

  @javascript
  Scenario: Login in form by user unregistered
    Given I am on "/login"
    When I fill in "login" with "Demo"
    When I fill in "pass" with "1234"
    And I press "Ingresar"
    Then I should see "Comprobando de credenciales"
    And I wait a few seconds
    Then I should see "Nombre de usuario o Contraseña inválido"

  @javascript
  Scenario: Recover password by email unregistered
    Given I am on "/login"
    And I click on the text "Recuperar contraseña"
    And I wait a few seconds
    When I fill in "mail" with "demo@example.local"
    And I press "Enviarme las instrucciones"
    Then I should see "Enviando instrucciones"
    And I wait a few seconds
    Then I should see "El usuario o dirección de correo \"demo@example.local\" no existe"

  @javascript
  Scenario: Register new user
    Given I am on "/login"
    And I click on the text "Registro"
    And I wait a few seconds
    When I fill in "name-register" with "Usuario Test"
    When I fill in "mail-register" with "demo@example.local"
    When I fill in "login-register" with "Usuario"
    When I fill in "pass-register" with "12345abc"
    And I press "send-register"
    Then I should see "Registrando"
    And I wait a few seconds
    Then I should see "Felicidades Usuario, tu cuenta está ahora confirmada"