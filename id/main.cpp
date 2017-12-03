#include <iostream>
#include <fstream>
using namespace std;

int main()
{
    fstream fin("base.svg",ios::in);
    fstream fout("output.svg",ios::out);
    int index = 0;
    string h;
    string a = "style";
    while(fin>>h)
    {
        fout<<h;
        if(h == "<polygon")
        {
            fout<<" id=\"triangle"<<index<<"\" ";
            fin>>h;
            fout<<h<<" ";
            h.replace(h.find(a),a.length(),"stroke");
            fout<<h;
            index++;
        }
        if(h == "\"/>" || h==">")
        {
           fout<<endl;
        }
        fout<<" ";
    }
    return 0;
}
