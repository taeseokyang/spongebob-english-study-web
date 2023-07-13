l = []
while 1:
    s = input()
    if s=='end':
        break
    l.append(s)
print("\n\n\n------>start")
print("<ul class='script'>")
for i in l:

    #remove actions
    # while 1:
    #     if '[' not in i:
    #         break
    #     left = i.index('[')
    #     right = i.index(']')
    #     i = i[:left]+i[right+1:]


    k = i.split(':')
    if k == ['']:
        print('<li><span>No lines</span></li>',sep="")
    else:
        print('<li><span>',k[0],':</span>',*k[1:],'</li>',sep="")
print("</ul>")

