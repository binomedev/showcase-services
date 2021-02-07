<?php


use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Traits\SEOTools;
use Binomedev\ShowcaseServices\Service;

class ServicesController extends Controller
{
    use SEOTools;

    public function index()
    {
        $this->seo()->setTitle(__('showcase-services.index.title'));
        $this->seo()->setDescription(__('showcase-services.index.summary'));
        $this->seo()->metatags()->setKeywords(__('showcase-services.index.tags'));

        $services = Service::query()->paginate();

        return view('showcase-services::index', compact('services'));
    }

    public function show(Service $service)
    {
        $this->seo()->setTitle($service->name);
        $this->seo()->setDescription($service->summary);
        $this->seo()->metatags()->setKeywords($service->tags);

        return view('showcase-services::show', compact('service'));
    }
}
