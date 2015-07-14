# Berlin Connect

Berlin Connect &#8211; Young local church in the heart of Berlin // English speaking bilingual church service worship Gemeinde Kirche Hillsong

We are basing this initially on <http://basscss.com>. Basscss is a
lightweight collection of base element styles, utilities, layout
modules, and color styles designed for speed, performance, and
scalability.

We will modify it to suite our needs. The tradeoffs we are embraceing
are:

* Minimalistic OOCSS which means lots of class names per element
* Speed is prioritized highest as designs will be done in the browser
* Sacrificing semantics and higher reusability
* Speed is prioritized for the viewer as well by not including lots of
  unused css
* Creating a new component should 95% of the time not require new css
* All updates are versioned with git tags: a project will freeze to a
  git tag directly
* All component updates are documented in the CHANGELOG by version
* Assets are linked directly from a CDN with url including it's version

# Styleguide

When you're creating new designs, you can look at our simple styleguide to help you get started.

<a href="http://f.cl.ly/items/0t0G1P2I3W0S3e313j0p/styleguide.pdf">View PDF</a>


# Bass CSS Order

While the order of classes doesn't matter to the browser, maintaining a consistent order will drastically improve code readability. 

The following order is recommended by Bass CSS:

1. Typography - sets the visual hierarchy and is one of the most important parts of web design
2. Positioning - can severely change document flow
3. Layout - can affect other elements and document flow
4. Color & Theme - has little or no effect on layout
5. State - is dynamic and often unnecessary
6. Custom - our custom CSS classes


# Get started with development

### Install dependencies

    $ make npm

### Run stylus compiler and watch filetree

    $ make start

### Make build of CSS and Javascript

    $ npm install requirejs -g
    $ make build

## Deploying changes

#### Automagically (production/development)
  * Push to production or development branch for staging, OR
  * Create a pull request against production/development branch

 Once the code is merged, the automatic deployment would pick up the changes & deploy everywhere in 10 minutes time.
