Feature: Client mdmin manager
  In order to admin a user client
  As a website admin
  I admin credentials to login a admin dashboard

    Background:
    Given I am logged in as administrator
    And there are following users:
      | email | password | enabled |       role       |
      | demo  | 12345abg | yes     |    ROLE_USER     |
      | test  | testabg  | no      |    ROLE_USER     |
      | admin | 4213562  | yes     | ROLE_SUPER_ADMIN |

    @javascript
    Scenario: Update user info
        Given I am list admin "sonata user user"
        And I click on the text "demo"
        Then I should see "Editar \"demo\""
        When I fill in the following:
            | Nombre de usuario               | test2                       |
            | Dirección de correo electrónico | tecno@tecnocreaciones.com   |
            | Contraseña                      | t2c123d                     |
        And I press "Actualizar"
        Then I should see "Elemento actualizado satisfactoriamente"