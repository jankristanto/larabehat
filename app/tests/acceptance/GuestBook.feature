Feature: Guest Book
 In Order to track my visitors
 As the site owner
 I want to give users the ability to sign the guest book

 Scenario: User fills out guest book form
  Given there are no guests
  And I am on "guests/create"
  And I fill out the guest book
  Then I should see "Lippo"
  And I should see "Excellent Website!"

 Scenario: User fill out guest book form with invalid credentials
  Given I am on "guests/create"
  And I fill out the guest book incorrectly
  Then I should see "Please fill out both inputs."