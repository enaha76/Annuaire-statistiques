var catagory = [
    {cand1:[1,0]},
    {cand2:[1,2]},
    {cand3:[1,1]},
    {cand4:[1,0]},
    {etu1:[2,1]},
    {etu2:[2,1]},
    {etu3:[2,0]},
    {etu3:[2,0]},
    {etu4:[3,1]},
    {etu5:[4,0]},
    {etu6:[2,0]},
    {etu7:[1,0]},
    {etu8:[1,0]},
    {etu9:[1,0]},
    {sort1:[2,1]},
    {sort2:[1,0]},
    {bour1:[1,0]},
    {bour2:[2,0]},
    {bour3:[2,0]},
    {bour4:[2,0]},
    {ensg1:[1,1]},
    {ensg2:[1,0]},
    {ensg3:[2,0]},
    {ensg4:[2,0]},
    {ensg5:[1,0]},
    {ensg6:[1,1]},
    {cnou:[1,0]},
    
];
for (i=0, cat in catagory ,i++ ){
    con = object.keys(cat)[i]   
    console.log(con);
}