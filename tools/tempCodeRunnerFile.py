n = int(input())
l = [0]*(n+1)
l[n] = 1
for i in range(n,-1,-1):
    if i%3==0:
        if l[i//3]==0:l[i//3]=l[i]+1
        else:l[i//3]=min(l[i]+1,l[i//3])
    if i%2==0:
        if l[i//2]==0:l[i//2]=l[i]+1
        else:l[i//2]=min(l[i]+1,l[i//2])
    if l[i-1]==0:l[i-1]=l[i]+1
    else:l[i-1]=min(l[i]+1,l[i-1])
    
print(l[1]-1)