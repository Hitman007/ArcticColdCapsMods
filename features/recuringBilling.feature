Feature: recurring billing
    In order to make more money
    As the ArcticColdCaps system
    I should have a recurring billing system

Scenario: A customer purchases a recurring subscription
    When a customer purchases a recurring subscription
    Then then the system should be set to bill him every month until further notice
    And there should be a mechanism to turn the rb on and off
    And there should be a date seen
