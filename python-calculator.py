## This is the original code for calculation:


pi = 3.14159

def diameter():
  global calcDiameter
  calcDiameter = float(input())
  return calcDiameter

def radius():
  global calcRadius
  calcRadius = calcDiameter / 2
  return calcRadius

def area():
  calcArea = pi * calcRadius * calcRadius
  return calcArea

def circumference():
  calcCirc = pi * calcDiameter
  return calcCirc

print('For a circle with a diameter of', diameter(), 'units:', '\n' 'The radius would be:', radius(), '\n' 'The area would be:', area(), '\n' 'And the circumference would be:', circumference())

