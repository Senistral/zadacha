#include <windows.h>
#include <stdio.h>
#include<dir.h>
#include<locale.h>
#include <time.h>


FILE *k(KeyAdm.txt,"wr");


int main()
{

    int a=0;
    int i=0;
    system("chcp 1251 > nul");

    printf("������������� ����? \n");
    printf("��������� ����� �� ������ ��������� ������\n");
    printf("������� ���� ��� ����������(������ �����)\n");
    //printf("%c",azb[3]);
    scanf("%d",&a);

     int azbuka (int)
     {   int i=0;
         int soprejenie=0; // ���������� ������� ������������ 2 ������
         a=soprejenie; // �������� �������� ����
         static char azb[25]={'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','x','y','z'}; // �����
         static int azb2[25]={65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90};   // ����� � ���������� (����� �������)

         for(0;25;i++)
            azb[i]=azb2[i]; // ������� �������� �����
             // ����� ������ ���������� ������� ������ ������ ���������� ��� ����� ��� � � ����� � ����������
          return soprejenie;

     };


    int ia=0;
for(0;25;ia++)
{

azbuka(&a); // ��������� ������� (����� ������� �� ���������� ("�";))
// �c�� �������� ���� ������ +1 �� ������ � ��� b, b ��� �, c ��� d.
// ���� �������� ���� ������ +2 �� ������ a ��� �, b ��� d, � ���  e.

}

char parol[n]; // n ���������� ������ �������������� ������� ������ ���� � ������
int n; // ������� ������ ���� �������� � ������
scanf("%d",n); // ����� ������ ������� ����� �������� � ������
if(n=="%d")
{ // ���� ����� ����� (������) ��� ����� ���� �������� ��� ������ ����� � ��������� �������� ������

int i=0;
for(i=0;n;i++)
{
// ��������� ������ � ���� ������
azbuka(parol[n]);
/// ���������� � ���� ������

for(i=0;i<n;++i){
    fprintf(k,"%c\n",parol[i]);
};



};
};



};
}

 fclose(k);
 getch();
 return 0;
 };





