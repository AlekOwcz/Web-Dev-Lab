using Microsoft.AspNetCore.Mvc;

namespace MvcMovie.Controllers
{
	public class TestController : Controller
	{
		public string Index()
		{
			return "this is a test";
		}
	}
}
