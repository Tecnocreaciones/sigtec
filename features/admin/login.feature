Feature: Login Admin dashboard
  In order to enter on admin area
  As a website admin
  I admin credentials to login a admin dashboard

    Background:
      And there are following users:
      | email | password | enabled |       role       |
      | demo  | 12345abg | yes     |    ROLE_USER     |
      | test  | testabg  | no      |    ROLE_USER     |
      | admin | 4213562  | yes     | ROLE_SUPER_ADMIN |
      
    @javascript
    Scenario: Logging into the website administrator with incorrect login and password
        Given I am on admin login page
        When I fill in the following:
            | Nombre de usuario | invalid        |
            | Contraseña        | 3123invalidpa  |
        And I press "Entrar"
        Then I should see "Nombre de usuario o contraseña invalida"

    Scenario: Logging into the website administrator with a user without credentials
        Given I am on admin login page
        When I fill in the following:
            | Nombre de usuario | demo     |
            | Contraseña        | 12345abg |
        And I press "Entrar"
        And I go to admin dashboard
        And I should be denied access to the request
        
    @javascript
    Scenario: Logging into the website administrator with a correct user credentials
        Given I am on admin login page
        When I fill in the following:
            | Nombre de usuario | admin     |
            | Contraseña        | 4213562   |
        And I press "Entrar"
        And I go to admin dashboard
        Then I should see "Administración"