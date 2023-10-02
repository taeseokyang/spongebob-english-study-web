import sys
a =int(input())
l = [[0]*a]
for i in range(a):
    l.append(list(map(int,sys.stdin.readline().strip().split())))
l[0][1] = ([1],0)
for i in range(1,a):
    for j in range(2,a):
        k = l[i][j-1]
        b = k[0]
        c = k[1]
        if b == [3]:
            c = 0
            b = 0
        else:
            b = 1
        k = l[i-1][j-1]
        b2 = k[0]
        c2 = k[1]
        b2 = 2
        k = l[i-1][j]
        b3 = k[0]
        c3 = k[1]
        if b2 == [1]:
            c3 = 0
            b3 = 0
        else:
            b3 = 3

        l[i][j] = ([b,b2,b3],c+c2+c3)

print(l)
        



