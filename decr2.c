#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>
#include <unistd.h>
#include <crypt.h>
int reacrypt(FILE *fi, FILE *fo, char *key)
{
	unsigned char wbuff[128],rbuff[256],*wptr;
	int klen = strlen(key),len,i,flag, end;
	unsigned char *ptr;
	unsigned char *dat,*hash;
	size_t l2;
	//printf("%s",key);
	while((l2 = fread(rbuff, 1, sizeof(rbuff), fi)) > 0) {
		len=0;
		wptr = wbuff;		
		while(len<l2/2) //Joining
		{
						
			*wptr = rbuff[2*len]*4 + (rbuff[2*len+1]-'0');
			wptr++; len++;
			
		}		
		ptr = wbuff;		
		while(len--)
		{
			*ptr =(~*ptr);
			ptr++;
		}
		
		end = l2/2;
		dat=wbuff;
		
		while(end>0)
		{
	    		hash=key;
			for(i = 0;i < ((klen<end)?klen:end); ++i)
	    		{
	    			*dat ^= *hash;
				dat++;
				hash++;
	    		}
			end-=klen;
		}
			
		fwrite(wbuff, 1, l2/2, fo);
	}	
	return 0;
}
int main(int argc, char const *argv[])
{
	char ipf[32],opf[32]; 
	char *key;
	FILE *ifile, *ofile;
	int flag;
	char salt[]="$5$";
	strcpy(ipf,argv[1]);
	ifile = fopen(ipf,"r");
	strcpy(opf,"temp.raw");
	ofile = fopen(opf,"w");
	key=crypt("94fbr",salt);
	flag=reacrypt(ifile,ofile,key);
	if(flag==0)
	{
		printf("Succes");
	}
	/*if(argc >= 2)
	{
		if(argc == 3)
			strcpy(opf,argv[2]);
		else
			
		if( ifile == NULL)
		{
			printf("Error reading File :(\n");
  		}
		if( ofile == NULL)
		{
			printf("Error writing File :(\n");
  		}
  		key=crypt(getpass("Key"),salt);
		flag=reacrypt(ifile,ofile,key);
		if(flag==0)
		{
			printf("Decryption Succes :)\n");
		}*/
		
		fclose(ifile);
		fclose(ofile);
/*	}
	else
		printf("Insufficient Arguments :(\n");*/
	return 0;
}

