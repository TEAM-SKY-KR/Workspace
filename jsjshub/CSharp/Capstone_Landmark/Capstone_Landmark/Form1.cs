using System;
using System.Collections;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;
using System.Text.RegularExpressions;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Capstone_Landmark
{
    public partial class Form1 : Form
    {
        //이미지 분류 전역변수
        public static ArrayList image_url = new ArrayList();
        //관광지 타이틀 전역변수
        public static ArrayList landmark_title = new ArrayList();
        //관광지 설명 전역변수
        public static ArrayList landmark_explain = new ArrayList();
        //관광지 전화번호 전역변수
        public static ArrayList landmark_phone = new ArrayList();
        //관광지 주소 전역변수
        public static ArrayList landmark_address = new ArrayList();




        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {

            int count = 0;
            for (int i = 1; i <= 25; i++)
            {

                //httprequest 받아오기
                string url = "https://tour.daegu.go.kr/index.do?menu_id=00002943";
                string temp = HttpRequest.Result_Post(url, i);


                //이미지분류
                Regex reg = new Regex(@"<imgsrc=""/icms/tour(.+)""alt=");
                MatchCollection resultColl = reg.Matches(temp.Replace(" ", String.Empty));



                foreach (Match mm in resultColl)
                {
                    image_url.Add("https://tour.daegu.go.kr/icms/tour" + mm.Groups[1].ToString().Trim());
                    //Console.WriteLine(mm.Groups[1].ToString().Trim());
                }

                //관광지분류
                reg = new Regex(@"class=""sub_box_title_nav"">(.+)</a>");
                resultColl = reg.Matches(temp);


                foreach (Match mm in resultColl)
                {
                    landmark_title.Add(mm.Groups[1].ToString().Trim());
                    Console.WriteLine(mm.Groups[1].ToString().Trim());
                }



                //관광지 설명
                reg = new Regex(@"<p class=""black_line_ct"">(.+)</p>");
                resultColl = reg.Matches(temp);


                foreach (Match mm in resultColl)
                {
                    landmark_explain.Add(mm.Groups[1].ToString().Trim());
                    //Console.WriteLine(mm.Groups[1].ToString().Trim());

                }




                //관광지 전화번호
                reg = new Regex(@"<span class=""adress1"">(.+)</span>");
                resultColl = reg.Matches(temp);


                foreach (Match mm in resultColl)
                {
                    landmark_phone.Add(mm.Groups[1].ToString().Trim());
                    //Console.WriteLine(mm.Groups[1].ToString().Trim());
                }


                //관광지 주소
                reg = new Regex(@"<span class=""adress"">(.+)</span>");
                resultColl = reg.Matches(temp.Replace("\r", string.Empty));



                foreach (Match mm in resultColl)
                {
                    if (!mm.Groups[1].ToString().Trim().Contains("<a href="))
                    {
                        landmark_address.Add(mm.Groups[1].ToString().Trim());
                        //Console.WriteLine(mm.Groups[1].ToString().Trim());
                    }
                }

            }
         

        }


        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {


        }

        private void button3_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click_1(object sender, EventArgs e)
        {
            string url = "https://tour.daegu.go.kr/index.do?menu_id=00002943";
            string temp = HttpRequest.Result_Post(url, 2);

            //관광지 주소
            Regex reg = new Regex(@"<span class=""adress"">(.+)</span>");
            MatchCollection resultColl = reg.Matches(temp.Replace("\r", string.Empty));


            foreach (Match mm in resultColl)
            {


                if (!mm.Groups[1].ToString().Trim().Contains("<a href="))
                {
                    landmark_address.Add(mm.Groups[1].ToString().Trim());
                    Console.WriteLine(mm.Groups[1].ToString().Trim());
                }


            }
        }
    }
}
