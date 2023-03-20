pi = 3.14159

print('Please enter your diameter:')

def diameter():
  diameter = input()
  return diameter

def radius():
  global calcRadius
  calcRadius = diameter / 2
  return calcRadius

def area():
  calcArea = pi * calcRadius ** calcRadius
  return calcArea

def circumference():
  calcCirc = pi * diameter
  return calcCirc

print('For a circle with a diameter of' + diameter() 'units:', '\n','The radius would be:' + radius(), '\n', 'The area would be:' + area(), '\n', 'And the circumference would be:' circumference())
