using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace FirefoxCrack
{
    class LoginFirefox
    {
        public int id { get; set; }
        public string hostname { get; set; }
        public string httpRealm { get; set; }
        public string formSubmitURL { get; set; }
        public string usernameField { get; set; }
        public string passwordField { get; set; }
        public string encryptedUsername { get; set; }
        public string encryptedPassword { get; set; }
        public string guid { get; set; }
        public int encType { get; set; }
        public string timeCreated { get; set; }
        public string timeLastUsed { get; set; }
        public string timePasswordChanged { get; set; }
        //string used because int too small, not gonna use it anyways
        public int timesUsed { get; set; }

    }
}
