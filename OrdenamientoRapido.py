def ORapido(vector):
    if not vector:
        return []
    else:
        pivote = vector[-1]
        menor = [x for x in vector if x < pivote]
        mas_grande = [x for x in vector[:-1] if x >= pivote]
        return ORapido(menor) + [pivote] + ORapido(mas_grande)
v=[4,6,2,8,4]
print(ORapido(v))
