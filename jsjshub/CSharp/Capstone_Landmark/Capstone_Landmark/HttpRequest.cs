using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading.Tasks;

namespace Capstone_Landmark
{
    internal class HttpRequest
    {
        public static string Result_Get(string url_text)
        {
            string temp = null;
            string url = url_text;  //테스트 사이트
            string responseText = string.Empty;

            HttpWebRequest request = (HttpWebRequest)WebRequest.Create(url);
            request.Method = "GET";
            request.Timeout = 30 * 1000; // 30초
            request.Headers.Add("Authorization", "BASIC SGVsbG8="); // 헤더 추가 방법

            using (HttpWebResponse resp = (HttpWebResponse)request.GetResponse())
            {
                HttpStatusCode status = resp.StatusCode;


                Stream respStream = resp.GetResponseStream();
                using (StreamReader sr = new StreamReader(respStream, Encoding.Default, true))
                {
                    responseText = sr.ReadToEnd();
                }
            }


            temp = responseText;
            return temp;
        }

        public static string Result_Post(string url_text, int i)
        {
            string temp = null;

            string url = url_text;
            string data = "tourId=&pageIndex="+i+"&searchCondition2=1&searchCondition3=&searchCondition4=&view_keyword=&view_category2=&keyword=&searchKeyword=";

            HttpWebRequest request = (HttpWebRequest)WebRequest.Create(url);
            request.Method = "POST";
            request.ContentType = "application/x-www-form-urlencoded";
            request.Timeout = 30 * 1000;
            //request.Headers.Add("Authorization", "BASIC SGVsbG8=");

            // POST할 데이타를 Request Stream에 쓴다
            byte[] bytes = Encoding.ASCII.GetBytes(data);
            request.ContentLength = bytes.Length; // 바이트수 지정

            using (Stream reqStream = request.GetRequestStream())
            {
                reqStream.Write(bytes, 0, bytes.Length);
            }

            // Response 처리
            string responseText = string.Empty;
            using (WebResponse resp = request.GetResponse())
            {
                Stream respStream = resp.GetResponseStream();
                using (StreamReader sr = new StreamReader(respStream))
                {
                    responseText = sr.ReadToEnd();
                }
            }

            temp = responseText;
            return temp;
        }
    }
}
