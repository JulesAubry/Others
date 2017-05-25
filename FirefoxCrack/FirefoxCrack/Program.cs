using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Runtime.InteropServices;
using System.Text;
using System.Threading.Tasks;
using Newtonsoft.Json;

namespace FirefoxCrack
{
    class Program
    {
        static void Main(string[] args)
        {
            if (args.Count() == 1)
            {
                Crack(args[0]);
                Console.ReadLine();
            }
            else
            {
                Console.WriteLine("Not enough arguments");
                Console.ReadLine();
            }

        }

        private static void Crack(string s)
        {
            string path = Path.Combine(Environment.GetFolderPath(Environment.SpecialFolder.ApplicationData),"Mozilla","Firefox","Profiles");
            List<string> dirs = new List<string>(Directory.EnumerateDirectories(path));
            List<LoginFirefox> listLogins = new List<LoginFirefox>(); 

            //add librairy nss3 firefox to decrypt

            foreach (var dir in dirs)
            {
                string[] fileLogins = Directory.GetFiles(dir, "logins.json");
                foreach (var d in fileLogins)
                {
                    dynamic stuff = JsonConvert.DeserializeObject(File.ReadAllText(d));
                    foreach (var login in stuff.logins)
                    {
                        LoginFirefox lF = new LoginFirefox();
                        
                        lF.id = login.id;
                        lF.hostname = login.hostname;
                        lF.httpRealm = login.httpRealm;;
                        lF.formSubmitURL = login.formSubmitURL;
                        lF.usernameField = login.usernameField;
                        lF.passwordField = login.passwordField;

                        //Console.WriteLine((login.encryptedUsername).ToString());
                        string username = login.encryptedUsername.ToString();
                        string pwd = login.encryptedPassword.ToString();

                        lF.encryptedUsername = System.Text.Encoding.UTF8.GetString(Convert.FromBase64String(username)); //username;
                        lF.encryptedPassword = System.Text.Encoding.UTF8.GetString(Convert.FromBase64String(pwd)); //pwd;
                        lF.guid = login.guid;
                        lF.encType = login.encType;
                        lF.timeCreated = login.timeCreated;
                        lF.timeLastUsed = login.timeLastUsed;
                        lF.timePasswordChanged = (login.timePasswordChanged).ToString();
                        lF.timesUsed = login.timesUsed;
                        listLogins.Add(lF);
                    } 
                }
            }

            foreach (LoginFirefox l in listLogins)
            {
                Console.WriteLine("Site : " + l.hostname);
                Console.WriteLine("Login : " + l.encryptedUsername);
                Console.WriteLine("Password : " + l.encryptedPassword);
            }
        }

        private static string Decrypt(string cypherText)
        {
            
            return null;
        }
    }
}
